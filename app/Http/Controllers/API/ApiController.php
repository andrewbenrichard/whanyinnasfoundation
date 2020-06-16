<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\Article;
use App\Project;
use App\Gallery;
use App\Donation;
use App\ArticleGallery;
use Illuminate\Support\Carbon;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stats()
    {
        $donations = Donation::get();
        $donation_total = $donations->sum('amount');
        $data = [
            'projectCount' => Project::count(),
            'DonateCount' => Donation::count(),
            'ArticleCount' => Article::count(),
            'GalleryCount' => Gallery::count(),
            'AmountTotal' => '₦'.$donation_total,
        ];
        
         return response()->json($data);
    }
    public function projects()
    {
        $projects = Project::get();
     
         return response()->json($projects);
    }
    public function singleProject($slug)
    {
        $project = Project::where('project_slug', '=', $slug)->first();
        
        return response()->json($project);
    }
    public function galleries()
    {
        $galleries = Gallery::get();
     
         return response()->json($galleries);
    }
    public function articles()
    {
        $articles = Article::get();
        foreach ($articles as $article) {
            $date = Carbon::parse($article->created_at); // now date is a carbon instance

        $art_json[]=array(
            'id' => $article->id,
            'article_title' => $article->article_title,
            'article_body' => $article->article_body,
            'article_img' => $article->article_img,
            'article_date' => $date->diffForHumans(),
            'article_slug' => $article->slug,
        );
        }
       
         return response()->json($art_json);
    }
    public function donations()
    {
        $donations = Donation::get();
        foreach ($donations as $donate) {
            $date = Carbon::parse($donate->created_at); // now date is a carbon instance

        $donate_json[]=array(
            'id' => $donate->id,
            'donate_name' => $donate->first_name.' '.$donate->last_name,
            'donate_email' => $donate->email,
            'donate_date' => $date->diffForHumans(),
            'donate_number' => $donate->number,
            'donate_message' => $donate->message,
            'donate_amount' => $donate->amount,
        );
        }
       
         return response()->json($donate_json);
    }
    public function singleArticle($slug)
    {
        $article = Article::where('slug', '=', $slug)->first();
        
        $date = Carbon::parse($article->created_at); // now date is a carbon instance

        $article_single =array(
            'id' => $article->id,
            'article_title' => $article->article_title,
            'article_body' => $article->article_body,
            'article_img' => $article->article_img,
            'article_date' => $date->diffForHumans(),
        );
        return response()->json($article_single);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ProjectStore(Request $request)
    {

       
        $this->validate($request,[
            'project_name' => 'required|string',
            'project_des' => 'required|string',
            'project_img' => 'required',
        ]);
        $slug = str_slug($request->project_name, '-');
        $validator = Validator::make(['project_name' => $slug], [
            'slug' => 'required|unique:projects,project_name,slug|max:191'
        ]);


        if($request->project_img){
            $name = time().'.' . explode('/', explode(':', substr($request->project_img, 0, strpos(
                $request->project_img, ';'
            )))[1])[1];

            \Image::make($request->project_img)->save(public_path('assets/img/donate/').$name);
            $project = Project::create([
                'project_name' => $request['project_name'],
                'project_des' => $request['project_des'],
                'project_img' => $name,
                'project_slug' => $slug,
            ]);
        }else {
            # code...
            $project = Project::create([
                'project_name' => $request['project_name'],
                'project_des' => $request['project_des'],
                'project_slug' => $slug,

                ]);
            }
        return response()->json($project);
    }
    public function saveDonation(Request $request)
    
    {
        $project = Project::where('project_slug', '=', $request->project_slug)->first();
        $donation = Donation::create([
            'last_name' => $request['last_name'],
            'first_name' =>$request['first_name'],
            'email' =>$request['email'],
            'number' =>$request['number'],
            'amount' =>$request['amount'],
            'message' =>$request['message'],
            'project_id' =>$project->id,
        ]);
        return response()->json($donation);
    }
    public function GalleryStore(Request $request)
    {

       
        $this->validate($request,[
            'gallery_name' => 'required|string',
            'gallery_img' => 'required',
           

        ]);

        if($request->gallery_img){
            $name = time().'.' . explode('/', explode(':', substr($request->gallery_img, 0, strpos(
                $request->gallery_img, ';'
            )))[1])[1];

            \Image::make($request->gallery_img)->save(public_path('assets/img/gallery/').$name);
        }
        $gallery = Gallery::create([
            'gallery_name' => $request['gallery_name'],
            'gallery_img' => $name,
        ]);
        return response()->json($gallery);
    }
    public function ArticleStore(Request $request)
    {

       
        $this->validate($request,[
            'article_title' => 'required|string',          
            'article_body' => 'required|string',          

        ]);

        $slug = str_slug($request->article_title, '-');
            $validator = Validator::make(['article_title' => $slug], [
                'slug' => 'required|unique:articles,article_title,slug|max:191'
            ]);

        if($request->article_img){
            $name = time().'.' . explode('/', explode(':', substr($request->article_img, 0, strpos(
                $request->article_img, ';'
            )))[1])[1];

            \Image::make($request->article_img)->save(public_path('assets/img/gallery/').$name);
            
            $article = Article::create([
                'article_title' => $request['article_title'],
                'article_body' => $request['article_body'],
                'article_img' => $name,
                'slug' => $slug,
            ]);
        }else{

            $article = Article::create([
                'article_title' => $request['article_title'],
                'article_body' => $request['article_body'],
                'slug' => $slug,
                ]);
            }
      
        return response()->json($article);
    }
    public function UploadArticlePics(Request $request)
    {

       
       $article = Article::where('id', $request->article_id)->first();


        if($request->article_img){
            $name = time().'.' . explode('/', explode(':', substr($request->article_img, 0, strpos(
                $request->article_img, ';'
            )))[1])[1];

            \Image::make($request->article_img)->save(public_path('assets/img/gallery/').$name);
            
            $images = ArticleGallery::create([
                'article_id' => $request['article_id'],
                'article_img' => $name,
            ]);
        }
      
        return response()->json($article);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ProjectDelete($id)
    {
        $project = Project::find($id)->delete();
        // DB::table('projects')->where('id', '', 100)->delete();

        return $id;
    }
    public function DonateDelete($id)
    {
        $donation = Donation::find($id)->delete();
        // DB::table('projects')->where('id', '', 100)->delete();

        return $id;
    }
    public function GalleryDelete($id)
    {
        $gallery = Gallery::find($id)->delete();
        return $id;
    }
    public function ArticleDelete($id)
    {
        $article = Article::find($id)->delete();
        return $id;
    }
    public function destroy($id)
    {
        //
    }
}

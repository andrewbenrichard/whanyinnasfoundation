@extends('layouts.app')

@section('content')
<div class="main_wrapper">

  <router-view></router-view>
  <vue-progress-bar></vue-progress-bar>
</div>
@endsection

<template>
  <div class="componet_holder">
    <topHeader />

    <div class="content">
      <div class="header top-90">
        <div class="page_title_left">
          <h3>Blog</h3>
        </div>
      </div>
    </div>

    <vs-button color="primary" @click="newModal" type="filled">Add Article</vs-button>

    <div class="container">
      <div class="row">
        <div class="col-md-3" v-for="article in articles" :key="article.id">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <h3>{{ article.article_title }}</h3>
            </div>
            <div slot="media">
              <img
                :src="
                                    '/assets/img/gallery/' + article.article_img
                                "
              />
            </div>
            <div>
              <span>{{ article.article_body }}</span>
            </div>
            <div slot="footer">
              <vs-row vs-justify="flex-end">
                <vs-button
                  @click="deleteArticle(article.id)"
                  type="gradient"
                  color="danger"
                  icon="delete"
                ></vs-button>
                <vs-button @click="editModal(article)" color="primary" icon="edit"></vs-button>
              </vs-row>
            </div>
          </vs-card>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Article</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="createArticle">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.article_title"
                  type="text"
                  name="article_title"
                  placeholder="Article Title"
                  class="form-control"
                  :class="{
                                        'is-invalid': form.errors.has(
                                            'article_title'
                                        )
                                    }"
                />
                <has-error :form="form" field="article_title"></has-error>
              </div>
              <div class="form-group">
                <textarea
                  v-model="form.article_body"
                  name="article_body"
                  cols="30"
                  rows="10"
                  placeholder="article_body"
                  class="form-control"
                  :class="{
                                        'is-invalid': form.errors.has(
                                            'article_body'
                                        )
                                    }"
                ></textarea>
                <has-error :form="form" field="article_body"></has-error>
              </div>
              <div class="form-group">
                <input name="article_img" @change="CreateImage" type="file" />
                <has-error :form="form" field="article_img"></has-error>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import topHeader from "./layouts/header.vue";
import Bottomfooter from "./layouts/footer.vue";

export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      articles: {},
      form: new Form({
        article_title: "",
        article_body: "",
        article_img: ""
      })
    };
  },
  components: {
    topHeader,
    Bottomfooter
  },
  computed: {
    ...mapGetters({
      authenticated: "auth/authenticated",
      user: "auth/user"
    })
  },
  methods: {
    ...mapActions({
      signOutAction: "auth/signOut"
    }),
    signOut() {
      this.signOutAction().then(() => {
        this.$router.replace({
          name: "home"
        });
      });
    },
    CreateImage(e) {
      let file = e.target.files[0];
      let reader = new FileReader();
      //   let vm = this;
      reader.onloadend = file => {
        this.form.article_img = reader.result;
      };
      reader.readAsDataURL(file);
    },
    newModal() {
      this.form.reset();
      $("#addNew").modal("show");
    },
    editModal(article) {
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(article);
    },
    deleteArticle(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        // send request to the server
        if (result.value) {
          this.form
            .delete("/api/sc_admin/delete/article/" + id)
            .then(() => {
              if (result.value) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
              }
              Fire.$emit("AfterCreate");
            })
            .catch(() => {
              Swal("Failed", "There was something wrong.", "warning");
            });
        }
      });
    },
    createArticle() {
      this.$Progress.start();
      this.form
        .post("/api/sc_admin/post/article")
        .then(() => {
          Fire.$emit("AfterCreate");
          $("#addNew").modal("hide");
          Toast.fire({
            type: "success",
            title: "User created successfully"
          });
          this.$Progress.finish();
        })
        .catch(() => {});
    },
    loadArticle() {
      axios
        .get("/api/sc_admin/articles")
        .then(({ data }) => (this.articles = data));
    }
  },
  created() {
    this.$Progress.start();
    Fire.$on("AfterCreate", () => {
      this.loadArticle();
    });
    this.loadArticle();
    this.$Progress.finish();
  }
};
</script>

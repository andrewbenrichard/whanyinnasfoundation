<template>
  <div class="home__holder">
    <topHeader />

    <!-- Start Page Title Area -->
    <div class="page-title-area">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-title-content">
              <h2>Gallery</h2>
              <ul>
                <li>
                  <a href="/index.html">Home</a>
                </li>
                <li>Gallery</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Gallery Area -->
    <div class="gallery-area pt-100 pb-70">
      <div class="section-title">
        <h2>Gallery</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6" v-for="gallery in galleries" :key="gallery.id">
            <div class="single-gallery-box">
              <img :src="'/public/assets/img/gallery/' + gallery.gallery_img" alt="image" />

              <a
                :href="'/public/assets/img/gallery/'+ gallery.gallery_img"
                class="gallery-btn"
                data-imagelightbox="popup-btn"
              >
                <i class="flaticon-search"></i>
              </a>
              {{gallery.gallery_name}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Gallery Area -->
    <Bottomfooter />
  </div>
</template>
 
<script>
import topHeader from "./layouts/header.vue";
import Bottomfooter from "./layouts/footer.vue";

export default {
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    topHeader,
    Bottomfooter
  },
  data() {
    return {
      galleries: {}
    };
  },
  methods: {
    loadGalleries() {
      axios
        .get("/api/sc_admin/galleries")
        .then(({ data }) => (this.galleries = data));
    }
  },
  created() {
    this.loadGalleries();
  }
};
</script>

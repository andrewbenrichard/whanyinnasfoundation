<template>
  <div>
    <!-- Start Footer Area -->
    <footer class="footer-section white-bg pt-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>Contact info</h3>

              <div class="footer-info-contact">
                <i class="flaticon-pin"></i>
                <h3>Location</h3>
                <span>
                  19, Raimi Street, Makoko Road,
                  <br />Yaba, Lagos.
                </span>
              </div>

              <div class="footer-info-contact">
                <i class="flaticon-call"></i>
                <h3>Call Us</h3>
                <span>
                  <a href="tel:+2348025644212">+234-802-564-4212</a>
                </span>
              </div>

              <div class="footer-info-contact">
                <i class="flaticon-email"></i>
                <h3>Email Us</h3>
                <span>
                  <a href="mailto:info@whanyinnasfoundation.org">info@whanyinnasfoundation.org</a>
                </span>
              </div>
              <div class="contact-info-content">
                <ul class="social">
                  <li>
                    <a href="#" target="_blank">
                      <i class="flaticon-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="flaticon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="flaticon-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="flaticon-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="flaticon-pinterest"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>Our Support</h3>

              <ul class="footer-quick-links">
                <li>
                  <router-link to="/projects">Donate</router-link>
                </li>

                <li>
                  <router-link to="/contact">Contact</router-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>Our Pages</h3>

              <ul class="footer-quick-links">
                <li>
                  <router-link to="/about-us">About Us</router-link>
                </li>

                <li>
                  <router-link to="/blog">Blog</router-link>
                </li>
                <li>
                  <router-link to="/gallery">Gallery</router-link>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>Recent News</h3>

              <div class="footer-news"></div>

              <div class="footer-news" v-for="article in articles" :key="article.id">
                <router-link :to="'/article/' + article.article_slug">
                  <h4>{{ article.article_title }}</h4>
                  <span>{{ article.date }}</span>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright-area">
        <div class="container">
          <div class="copyright-area-content">
            <div class="row align-items-center">
              <div class="col-lg-4">
                <div class="copyright-logo">
                  <img src="/public/assets/img/logo_debug.png" alt="image" />
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <p>
                  <i class="far fa-copyright"></i>
                  2020 Whanyinna Childern Foundation. All
                  Rights Reserved
                  <br />
                  <a href="https://envytheme.com/" target="_blank">Developed by Ski Clouds Dev</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Start Go Top Section -->
    <div class="go-top">
      <i class="bx bx-chevron-up"></i>
      <i class="bx bx-chevron-up"></i>
    </div>
    <!-- End Go Top Section -->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("footer mounted.");
  },
  data() {
    return {
      articles: {}
    };
  },
  methods: {
    loadArticle() {
      axios
        .get("/api/sc_admin/articles")
        .then(({ data }) => (this.articles = data));
    }
  },
  created() {
    this.loadArticle();
    this.$route.params;
  }
};
</script>

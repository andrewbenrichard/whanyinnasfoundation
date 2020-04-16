<template>
  <div class="home__holder">
    <topHeader />

    <!-- Start Main Banner Area -->
    <div class="main-banner-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="d-table">
              <div class="d-table-cell">
                <div class="main-banner-content">
                  <span>Whanyinna</span>
                  <h1>Helping childern across Nigeria access free education</h1>
                  <p>
                    We believe that when children have access to their rights,
                    they grow as an independent individual who can break through
                    the cycle of poverty and empowered to take their future into
                    their own hands and play an active part in shaping it.
                  </p>
                  <div class="banner-btn">
                    <router-link class="default-btn" to="/projects">
                      Donate Now
                      <i class="flaticon-right"></i>
                      <span></span>
                    </router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="banner-slider-wrap">
              <div class="banner-image-slider owl-carousel owl-theme">
                <div class="image-item">
                  <img src="/public/assets/img/home-two/1.jpg" alt="image" />
                </div>

                <div class="image-item">
                  <img src="/public/assets/img/home-two/2.png" alt="image" />
                </div>

                <div class="image-item">
                  <img src="/public/assets/img/home-two/3.png" alt="image" />
                </div>

                <div class="image-item">
                  <img src="/public/assets/img/home-two/2.png" alt="image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-shape">
        <img src="/public/assets/img/home-two/shape.png" alt="image" />
      </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Feature Area -->
    <!-- <section class="features-section ptb-100">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div class="feature-content">
              <span>Projects </span>
              <h3>You Can Help The Poor through us</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                quia Laboriosam libero ipsa velit omnis. Laboriosam quae sint.
              </p>
              <a href="#" class="optional-btn">
                Read More
                <i class="flaticon-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="feature-slider owl-carousel owl-theme">
              <div class="feature-card">
                <div class="icon">
                  <img src="/public/assets/img/icon/1.png" alt="image" />
                  <img src="/public/assets/img/icon/white-1.png" alt="image" />
                </div>

                <h3>Meet our Tutors</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do
                  eiusmod tempor incididun labore voluptatem accusantium.
                </p>

                <a href="#" class="feature-btn">
                  Join now +
                </a>
              </div>

              <div class="feature-card">
                <div class="icon">
                  <img src="/public/assets/img/icon/2.png" alt="image" />
                  <img src="/public/assets/img/icon/white-2.png" alt="image" />
                </div>

                <h3>Meet Our Kids</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do
                  eiusmod tempor incididun labore voluptatem accusantium.
                </p>

                <a href="#" class="feature-btn">
                  Give now +
                </a>
              </div>

              <div class="feature-card">
                <div class="icon">
                  <img src="/public/assets/img/icon/3.png" alt="image" />
                  <img src="/public/assets/img/icon/white-3.png" alt="image" />
                </div>

                <h3>Meet Our Alumni</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do
                  eiusmod tempor incididun labore voluptatem accusantium.
                </p>

                <a href="#" class="feature-btn">
                  Donate now +
                </a>
              </div>

              <div class="feature-card">
                <div class="icon">
                  <img src="/public/assets/img/icon/4.png" alt="image" />
                  <img src="/public/assets/img/icon/white-4.png" alt="image" />
                </div>

                <h3>Donate</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do
                  eiusmod tempor incididun labore voluptatem accusantium.
                </p>

                <a href="#" class="feature-btn">
                  Donate now +
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- End Feature Area -->

    <!-- Start About Area -->
    <section class="about-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-0">
            <div class="about-image about-img-two ptb-100">
              <img src="/public/assets/img/about/about-image.jpg" alt="image" />
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-item about-item-two ptb-100">
              <span>
                <i class="flaticon-care-about-plants"></i>
                About us
              </span>
              <h3>Whanyinna means love in Egun language. It is of Badagry Origin</h3>
              <p
                class="main-color"
              >There are 9 million children out of school in Nigeria (UNESCO 2015)</p>
              <p>
                The Whanyinna Children Foundation is a not for-profit and non-political organization.
                It was registered to be the legal custodian of the Whanyinna Nursery and Primary
                School, Makoko Waterfront. The school which started out of love for education and
                passion to use it as a tool for equipping the future of the community. We believe that
                when children have access to their rights, they grow as an independent individual
                who can break through the cycle of poverty and empowered to take their future into
                their own hands and play an active part in shaping it.
              </p>

              <div class="about-btn">
                <router-link to="/about-us" class="optional-btn">More about us</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Area -->

    <!-- Start Causes Area -->
    <!-- <section class="causes-section pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>
                        <i class="flaticon-ribbon"></i>
                        Our Causes
                    </span>
                    <h2>The causes we care about</h2>
                    <p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-causes">
                            <img src="/public/assets/img/causes/1.jpg" alt="image">
                            <div class="icon">
                                <i class="flaticon-book-1"></i>
                            </div>

                            <div class="causes-content">
                                <span>#Education</span>
                                <h3>Education for poor child</h3>
                                <p>Lorem ipsum dolor sit amet, consecteturad eiustempor incididunlabore</p>

                                <div class="causes-progress-bar">
                                    <div class="causes-progress-content">
                                        <span>Raised: $5,000.00</span>
                                        
                                        <div class="text-right">
                                            <span>Goal: $8,000.00</span>
                                        </div>
                                    </div>
                                    <p>Raised by 60 people within 10 days</p>
                                </div>
                                
                                <a href="single-causes.html" class="causes-btn-one">
                                    Donate Now
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-causes">
                            <img src="/public/assets/img/causes/2.jpg" alt="image">
                            <div class="icon">
                                <i class="flaticon-laptop"></i>
                            </div>

                            <div class="causes-content">
                                <span>#Donation</span>
                                <h3>Massive donation to poor</h3>
                                <p>Lorem ipsum dolor sit amet, consecteturad eiustempor incididunlabore</p>

                                <div class="causes-progress-bar">
                                    <div class="causes-progress-content">
                                        <span>Raised: $4,000.00</span>
                                        
                                        <div class="text-right">
                                            <span>Goal: $8,000.00</span>
                                        </div>
                                    </div>
                                    <p>Raised by 40 people within 12 days</p>
                                </div>
                                
                                <a href="single-causes.html" class="causes-btn-one">
                                    Donate Now
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-causes">
                            <img src="/public/assets/img/causes/3.jpg" alt="image">
                            <div class="icon">
                                <i class="flaticon-blood-bag"></i>
                            </div>

                            <div class="causes-content">
                                <span>#Helpless</span>
                                <h3>Huge help to homeless pupil</h3>
                                <p>Lorem ipsum dolor sit amet, consecteturad eiustempor incididunlabore</p>

                                <div class="causes-progress-bar">
                                    <div class="causes-progress-content">
                                        <span>Raised: $1,000.00</span>
                                        
                                        <div class="text-right">
                                            <span>Goal: $5,000.00</span>
                                        </div>
                                    </div>
                                    <p>Raised by 50people within 20days</p>
                                </div>
                                
                                <a href="single-causes.html" class="causes-btn-one">
                                    Donate Now
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>-->
    <!-- End Causes Area -->

    <!-- Start Process Area -->
    <!-- <section class="process-section pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <span>
                                <i class="flaticon-care-about-plants"></i>
                                Our Process
                            </span>
                            <h2>To have become a volunteer or donor for poor</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="process-item">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <h3>Select Position</h3>
                                    <p>Lorem ipsum dolor siamet ectetur adipisicing</p>
                                    <a href="#" class="process-btn">Give Requist +</a>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="process-item">
                                    <div class="icon">
                                        <i class="flaticon-confirmation"></i>
                                    </div>
                                    <h3>Get Confirmation</h3>
                                    <p>Lorem ipsum dolor siamet ectetur adipisicing</p>
                                    <a href="#" class="process-btn">Get Reaction +</a>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="process-item">
                                    <div class="icon">
                                        <i class="flaticon-enjoy"></i>
                                    </div>
                                    <h3>Get Enjoyed</h3>
                                    <p>Lorem ipsum dolor siamet ectetur adipisicing</p>
                                    <a href="#" class="process-btn">Enjoy Now +</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="process-image">
                            <img src="/public/assets/img/process.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
    </section>-->
    <!-- End Process Area -->

    <!-- Start Donate Form Area -->
    <section class="donate-form-section ptb-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="donate-form-content">
              <h3>Help us provide kids with free education?</h3>

              <div class="donate-form-info">
                <span>Or call us now</span>
                <h4>(+234) 08184667482</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form class="donate-form">
              <div class="row">
                <div class="col-lg-12">
                  <div class="donate-form-btn">
                    <router-link class="default-btn" to="/projects">
                      Make a donation
                      <span></span>
                    </router-link>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="donate-form-shape">
        <img src="/public/assets/img/donate-form/shape.png" alt="image" />
      </div>
    </section>
    <!-- End Donate Form Area -->

    <!-- Start Solve Area -->
    <section class="solve-section pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <span>
            <i class="flaticon-to-do-list"></i>
            Core Operating Values
          </span>
          <h2>On a mission to solve a problem</h2>
          <p>
            Our core operating values influence the culture and public image of
            Whanyinna Children Foundation as an effective community-based
            organization serving a wide variety of children and families:
          </p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="solve-item-two">
              <div class="icon">
                <img src="/public/assets/img/solve/1.png" alt="image" />
              </div>
              <h3>Integrity and Accountability</h3>
              <p>
                WCF maintains a high level of integrity in its administrative,
                service, and outreach activities; we tie these activities
                directly to our mission, and we maintain and report our records
                accurately.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="solve-item-two">
              <div class="icon">
                <img src="/public/assets/img/solve/2.png" alt="image" />
              </div>
              <h3>State-of-the-Art Practices</h3>
              <p>
                WCF aims for excellent, high-quality, state-ofthe-art approaches
                that our kids can always count on to be there.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="solve-item-two">
              <div class="icon">
                <img src="/public/assets/img/solve/3.png" alt="image" />
              </div>
              <h3>Individualized Support</h3>
              <p>
                WCF knows that people’s needs vary significantly and can change
                over time; we seek to understand the individual consumer and
                co-create the right supports for each child’s development.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="solve-item-two">
              <div class="icon">
                <img src="/public/assets/img/solve/4.png" alt="image" />
              </div>
              <h3>Caring Attitude</h3>
              <p>
                WCF demonstrates compassionate support and concern for children
                and their families.
              </p>
            </div>
          </div>
          <router-link class="default-btn" to="/about-us">
            Read more
            <span></span>
            <i class="flaticon-right"></i>
          </router-link>
        </div>
      </div>
    </section>
    <!-- End Solve Area -->

    <!-- Start Fame Area -->
    <section class="fame-section pb-100">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="fame-area-content">
              <span>
                <i class="flaticon-fame"></i>
                Our Fame
              </span>
              <h3>We believe that every child should have access to their rights</h3>
              <p>The WCF activities started from 2009 with the Whanyinna School.</p>

              <div class="row funfact-row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-fun-fact">
                    <p>Children currently enrolled</p>
                    <h3>
                      <span class="odometer" data-count="200">200</span>
                      <span class="sign-icon">+</span>
                    </h3>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-fun-fact">
                    <p>Standard Classrooms with ICT Lab and Library</p>
                    <h3>
                      <span class="odometer" data-count="8">8</span>
                    </h3>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-fun-fact">
                    <p>Kids waiting to be enrolled</p>
                    <h3>
                      <span class="odometer" data-count="300">300</span>
                      <span class="sign-icon">+</span>
                    </h3>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single-fun-fact">
                    <p>Alumni</p>
                    <h3>
                      <span class="odometer" data-count="155">155</span>
                      <span class="sign-icon">+</span>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 p-0">
            <div class="fame-image">
              <img src="/public/assets/img/fame.jpg" alt="image" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Fame Area -->

    <!-- Start Mission Area -->
    <section class="mission-area bg-background">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mission-tab mission-tab-three">
              <span>
                <i class="flaticon-target"></i>
                Our Mission
              </span>

              <h2>Concern about Our Mission</h2>

              <div class="tab mission-list-tab">
                <ul class="tabs">
                  <li>
                    <a href="#">Our Mission</a>
                  </li>
                  <li>
                    <a href="#">Our Vision</a>
                  </li>
                </ul>

                <div class="tab_content">
                  <div class="tabs_item">
                    <p>
                      We envision a society where all children and women enjoy
                      secure, healthy, enlightened lives and responsive
                      environment that promote their social, economic, cultural
                      and moral development for a life that is joyful and
                      fulfilling.
                    </p>
                  </div>

                  <div class="tabs_item">
                    <p>
                      We endeavor to unleash the potential of disadvantaged
                      children and their families to succeed in life through
                      quality education in an effective learning environment,
                      tuitionfree schools, health care, livelihood skills and
                      community development services. Child and gender
                      development are focal to our work.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="white-shape">
        <img src="/public/assets/img/white-shape.png" alt="Image" />
      </div>
    </section>
    <!-- End Mission Area -->

    <!-- Start Donate Area -->
    <section class="donate-section ptb-100">
      <div class="container">
        <div class="section-title">
          <h2>Donate a token - Help kids around the country</h2>
          <p>
            Did you know?
            <strong>Whanyinna means love in Egun language. It is of Badagry</strong>
          </p>
          <router-link class="default-btn" to="/projects">
            Become a contributor
            <i class="flaticon-right"></i>
          </router-link>
        </div>
      </div>

      <div class="default-shape">
        <img src="/public/assets/img/donate/1.png" alt="image" />
        <img src="/public/assets/img/donate/2.png" alt="image" />
      </div>
    </section>
    <!-- End Donate Area -->
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
  }
};
</script>

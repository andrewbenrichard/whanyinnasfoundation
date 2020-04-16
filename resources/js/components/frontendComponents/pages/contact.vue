<template>
  <div class="home__holder">
    <topHeader />
    <!-- Start Page Title Area -->
    <div class="page-title-area">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-title-content">
              <h2>Contact</h2>
              <ul>
                <li>
                  <a href="/index.html">Home</a>
                </li>
                <li>Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="contact-section ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="contact-info-address">
              <h3>Quick Contact</h3>

              <div class="info-contact">
                <i class="flaticon-pin"></i>
                <h3>Location</h3>
                <span>
                  19, Raimi Street, Makoko Road,
                  <br />Yaba, Lagos.
                </span>
              </div>

              <div class="info-contact">
                <i class="flaticon-call"></i>
                <h3>Call Us</h3>
                <span>
                  <a href="tel:+2348025644212">+234-8025-6442-12</a>
                </span>
              </div>

              <div class="info-contact">
                <i class="flaticon-email"></i>
                <h3>Email Us</h3>
                <span>
                  <a href="mailto:info@whanyinnasfoundation.org">info@whanyinnasfoundation.org</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="contact-area">
              <div class="contact-content">
                <h3>Let’s talk!</h3>
                <p>Contact us to get, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ainim veniam.</p>
              </div>

              <div class="contact-form">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          id="name"
                          class="form-control"
                          required
                          data-error="Please enter your name"
                          placeholder="Name"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="phone_number"
                          id="phone_number"
                          required
                          data-error="Please enter your number"
                          class="form-control"
                          placeholder="Phone"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          id="email"
                          class="form-control"
                          required
                          data-error="Please enter your email"
                          placeholder="email"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="msg_website"
                          id="msg_website"
                          class="form-control"
                          required
                          data-error="Please enter your website"
                          placeholder="Website"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <textarea
                          name="message"
                          class="form-control"
                          id="message"
                          cols="30"
                          rows="6"
                          required
                          data-error="Write your message"
                          placeholder="Write Something"
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="send-btn">
                        <button type="submit" class="default-btn">
                          Contact us
                          <i class="flaticon-right"></i>
                          <span></span>
                        </button>
                      </div>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area -->
    <div class="map-section">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799090714!2d-74.25987368715496!3d40.697670064588735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1570689677254!5m2!1sen!2sbd"
      ></iframe>
    </div>
    <!-- End Map Area -->
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

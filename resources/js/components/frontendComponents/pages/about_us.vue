<template>
  <div class="about__holder">
    <topHeader />

    <!-- Start Page Title Area -->
    <div class="page-title-area">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-title-content">
              <h2>About Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-section about-page pt-100 pb-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-item">
              <span>
                <i class="flaticon-care-about-plants"></i>
                About us
              </span>
              <h3>The Whanyinna Children Foundation History</h3>
              <p class="main-color">
                The Whanyinna Children Foundation is a not for-profit and
                non-political organization. It was registered to be the legal
                custodian of the Whanyinna Nursery and Primary School, Makoko
                Waterfront.
              </p>
              <p>
                The school which started out of love for education
                and passion to use it as a tool for equipping the future of the
                community. We believe that when children have access to their
                rights, they grow as an independent individual who can break
                through the cycle of poverty and empowered to take their future
                into their own hands and play an active part in shaping it. By
                rights, we mean rights to quality education in an all inclusive
                environment, right to health, right to nutritive diet, right to
                care, right to clean water and all other rights associated to
                humans. The school is a tuition-free elementary school that
                provides educational opportunities and creates a learning space
                for the children of the slum. In addition, the foundation
                provides support to the families of the disadvantaged children,
                engage in community service, social activities and capacity
                building, promote volunteerism and celebrate the humanity of
                every child we are privileged to support.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image">
              <img src="/public/assets/img/about/1.png" class="shadow about-page-img" alt="image" />
              <img src="/public/assets/img/about/2.png" class="shadow" alt="image" />
            </div>

            <!-- <div class="about-video">
              <a
                href="https://www.youtube.com/watch?v=uemObN8_dcw"
                class="video-btn popup-youtube"
              >
                <i class="bx bx-play"></i>
              </a>
            </div>-->
          </div>
        </div>
      </div>
    </section>
    <!-- End About Area -->

    <!-- Start Mission Area -->
    <section class="mission-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-0">
            <div class="mission-image">
              <img src="/public/assets/img/mission.png" alt="image" />
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mission-tab">
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
                      We envision a society where all children and women enjoy secure, healthy,
                      enlightened lives and responsive environment that promote their social, economic,
                      cultural and moral development for a life that is joyful and fulfilling.
                    </p>
                  </div>

                  <div class="tabs_item">
                    <p>
                      We endeavor to unleash the potential of disadvantaged children and their families to
                      succeed in life through quality education in an effective learning environment, tuitionfree schools, health care, livelihood skills and community development services. Child
                      and gender development are focal to our work.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Mission Area -->

    <!-- Start Team Area -->
    <section class="team-section pt-100 pb-70">
      <div class="container">
        <div class="team-title-area">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="section-title text-left">
                <span>
                  <i class="flaticon-support"></i>
                  Meet Our Team
                </span>
                <h2>The Whanyinna Children Foundation’s Staff</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="team-item">
              <div class="content">
                <img class="img-fluid team-image" src="/public/assets/img/team/2.png" alt />
                <h3>Noah Olorunwa Shemede</h3>
                <span>Founder and Executive Director</span>
                <p class="team-p">
                  Mr. Noah Olorunwa Shemede has been responsible for providing oversight functions for the
                  management of the School for 9 years since inception. He provides strategic direction and
                  leadership for the management team and coordinates administration, logistics, and fundraising
                  activities as well as managing relationships with local and foreign institutional partners and
                  donors. He is currently enrolled in a sandwich programme in Economics Educationat the
                  Faculty of Arts and Social Science, University of Lagos.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="team-item">
              <div class="content">
                <img class="img-fluid team-image" src="/public/assets/img/team/1.png" alt />
                <h3>Emmanuel Abiodun Oke</h3>
                <span>
                  Director of Strategic Initiatives and Special
                  Project
                </span>
                <p class="team-p">
                  Mr. Emmanuel holds a Bachelor Degree in Agricultural Extension and Rural Development from
                  the University of Ibadan. He is a trained Development Knowledge Facilitator of the National
                  Youth Service Corps Sustainable Development Goals CDS, FCT-Abuja. He worked with
                  Armormax Nigeria, a division of the International Armoring Corporation headquartered in
                  USA. He has over 7 years’ experience in volunteering having volunteered with the Whanyinna
                  School and the UN SDGs Action Campaign before joining Whanyinna Children Foundation
                  where he is a Director and the Secretary to the Board of Trustees. He is currently with the
                  International Institute of Tropical Agriculture (IITA), Abuja Station as a Research Intern at the
                  Yam Improvement for Income and Food Security in West Africa (YIIFSWA) Unit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Area -->
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

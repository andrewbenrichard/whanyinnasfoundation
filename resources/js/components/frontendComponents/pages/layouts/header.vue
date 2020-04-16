<template>
  <div>
    <div class="navbar-area navbar-style-two">
      <div class="huruma-responsive-nav">
        <div class="container">
          <div class="huruma-responsive-menu">
            <div class="logo">
              <router-link to="/">
                <img
                  src="/public/assets/img/Whanyinna logo trans (1).png"
                  class="white-logo"
                  alt="logo"
                />
                <img src="/public/assets/img/logo-2.png" class="black-logo" alt="image" />
              </router-link>
            </div>
          </div>
        </div>
      </div>

      <div class="huruma-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <router-link class="navbar-brand" to="/">
              <img src="/public/assets/img/logo_debug.png" class="white-logo" alt="logo" />
              <img src="/public/assets/img/logo_debug_2.png" class="black-logo" alt="image" />
            </router-link>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <router-link index="0" class="nav-link" to="/">Home</router-link>
                </li>

                <li class="nav-item">
                  <router-link index="1" class="nav-link" to="/about-us">About Us</router-link>
                </li>
                <li class="nav-item">
                  <router-link index="2" class="nav-link" to="/gallery">Gallery</router-link>
                </li>
                <li class="nav-item">
                  <router-link index="3" class="nav-link" to="/projects">Donate</router-link>
                </li>
                <li class="nav-item">
                  <router-link index="3" class="nav-link" to="/blog">Blog</router-link>
                </li>
                <li class="nav-item">
                  <router-link index="4" class="nav-link" to="/contact">Contact</router-link>
                </li>
                <!-- <template v-if="authenticated">
                  <li class="nav-item">
                    <router-link index="4" class="nav-link" to="/log_admin">Dashboard</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link index="4" class="nav-link" to="#">Logout</router-link>
                  </li>
                </template>-->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  mounted() {
    console.log("header mounted.");
  },
  data: () => ({
    activeItem: 0
  }),
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
    }
  }
};
</script>

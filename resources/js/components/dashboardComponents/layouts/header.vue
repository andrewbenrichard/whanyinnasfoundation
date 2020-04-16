<template>
  <div>
    <vs-navbar v-model="activeItem" class="nabarx">
      <div slot="title">
        <router-link to="/">
          <vs-navbar-title>Whanyinna Dashboard</vs-navbar-title>
        </router-link>
      </div>

      <vs-navbar-item index="0">
        <router-link to="/dashboard">Dashboard</router-link>
      </vs-navbar-item>
      <vs-navbar-item index="1">
        <router-link to="/dashboard/projects">Projects</router-link>
      </vs-navbar-item>
      <vs-navbar-item index="1">
        <router-link to="/dashboard/donations">Donations</router-link>
      </vs-navbar-item>
      <vs-navbar-item index="1">
        <router-link to="/dashboard/gallery">Gallery</router-link>
      </vs-navbar-item>
      <vs-navbar-item index="2">
        <router-link to="/dashboard/blog">Blog</router-link>
      </vs-navbar-item>

      <template v-if="authenticated">
        <vs-navbar-item index="3">
          <router-link to="dashboard/profile">Hello {{ user.name }}</router-link>
        </vs-navbar-item>
        <vs-navbar-item index="4">
          <a class="nav-link" href="#" @click.prevent="signOut">signout</a>
        </vs-navbar-item>
      </template>
    </vs-navbar>
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

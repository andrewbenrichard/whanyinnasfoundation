<template>
  <div class="componet_holder">
    <topHeader />

    <div class="content">
      <div class="header top-90">
        <div class="page_title_left">
          <h3>Dashboard</h3>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="stats_card">
            <div class="header">{{stats.AmountTotal}}</div>
            <div class="title">Total Paid</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="stats_card">
            <div class="header">{{stats.DonateCount}}</div>
            <div class="title">Total donations</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="stats_card">
            <div class="header">{{stats.projectCount}}</div>
            <div class="title">Total cuases</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="stats_card">
            <div class="header">{{stats.ArticleCount}}</div>
            <div class="title">Total blog</div>
          </div>
        </div>
      </div>
    </div>
    <!-- <bottomFooter /> -->
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import topHeader from "./layouts/header.vue";
// import bottomFooter from "./layouts/footer.vue";

export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      stats: {
        projectCount: "",
        DonateCount: ""
      }
    };
  },
  components: {
    topHeader,
    // bottomFooter
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
    loadStats() {
      axios.get("api/sc_admin/stats").then(({ data }) => (this.stats = data));
    }
  },
  created() {
    this.$Progress.start();
    Fire.$on("AfterCreate", () => {
      this.loadStats();
    });
    this.loadStats();
    this.$Progress.finish();
  }
};
</script>
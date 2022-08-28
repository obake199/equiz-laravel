<template>
  <v-app id="inspire">
    <Side></Side>
    <v-main>
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script>
  import SideHead from '../../js/reusable/SideHead.vue';
  export default {
    name: "App",
    components: {
      'Side': SideHead,
    },
    data: function () {
      return {}
    },

    method: {

    },

    // mounted() {
    //   this.hi();
    // }
  }
</script>
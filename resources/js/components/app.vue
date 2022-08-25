<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <!--  -->
    </v-navigation-drawer>

    <v-app-bar app>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title v-if="flash !== '/'">Application</v-toolbar-title>
    </v-app-bar>

    <v-main>
      <Transition>
        <router-view></router-view>
      </Transition>
    </v-main>
  </v-app>
</template>

<script>
  export default {
    data: function () {
      return {
        drawer: false,
        flash: this.$route.path
      }
    },

    mounted() {
      // console.log(this.$route.path);
    }
  }
</script>

<style>
.v-enter-active,
.v-leave-active {
  transition: opacity 0.1s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>
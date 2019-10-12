<template>
    <v-app-bar
      app
      :elevation="scrollYposition > scrollMaxY ? maxElevation : minElevation"
      :color="scrollYposition > scrollMaxY ? 'secondary' : 'transparent'"
    >
      <v-img
        :src='require("../../../public/images/KaitoHealthLogoTransparentAlt.png")'
        max-height="40px"
        max-width="180px"
        contain
      />

      <div class="flex-grow-1"></div>

      <v-toolbar-items>
        <v-btn text color="accent" :ripple="{ class:'primary--text' }" @click="$vuetify.goTo('#home')">Home</v-btn>

        <v-menu bottom left :offset-y="true" transition="slide-x-transition">
          <template v-slot:activator="{ on }">
            <v-btn text color="accent" :ripple="{ class:'primary--text' }" v-on="on">
              About
              <v-icon right color="primary">mdi-menu-down</v-icon>
            </v-btn>
          </template>
          <v-list rounded>
            <v-list-item v-for="(item, i) in aboutItems" :key="i" v-ripple="{ class: 'primary--text' }" href="#">
              <v-list-item-title class="accent--text">{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>

        <v-menu bottom left :offset-y="true" transition="slide-x-transition">
          <template v-slot:activator="{ on }">
            <v-btn text color="accent" :ripple="{ class:'primary--text' }" v-on="on">
              The Future
              <v-icon right color="primary">mdi-menu-down</v-icon>
            </v-btn>
          </template>
          <v-list rounded tile>
            <v-list-item v-for="(item, i) in futureItems" :key="i" v-ripple="{ class: 'primary--text' }" @click={}>
              <v-list-item-title class="accent--text">{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>

        <v-btn text color="accent" :ripple="{ class:'primary--text' }" @click="$vuetify.goTo('#team')">The Team</v-btn>

        <v-btn text color="accent" :ripple="{ class:'primary--text' }" @click="$vuetify.goTo('#contact')">Contact</v-btn>
      </v-toolbar-items>

    </v-app-bar>
</template>

<script>
  export default {
    mounted () {
      window.addEventListener('scroll', this.onScroll)
    },

    beforeDestroy () {
      window.removeEventListener('scroll', this.onScroll)
    },

    data () {
      return {
        aboutItems: [
          { title: 'The vision' },
          { title: 'The App' },
          { title: 'Blockchain Technology' },
        ],
        futureItems: [
          { title: 'Learn More' },
          { title: 'Collaborate with us' },
          { title: 'Surveys' },
        ],
        scrollYposition: 0,
        scrollMaxY: 10,
        maxElevation: 1,
        minElevation: 0,
      }
    },

    methods: {
      onScroll () {
        this.scrollYposition = window.pageYOffset || document.documentElement.scrollTop
      }
    }
  }
</script>

<style>
</style>
<template>
    <v-app-bar
      app
      :elevation="scrollYposition > scrollMaxY ? maxElevation : minElevation"
      :color="scrollYposition > scrollMaxY ? 'secondary' : 'transparent'"
    >
      <v-img
        :src='require("../../../public/images/KaitoHealthLogoTransparentAlt.png")'
        height="40px"
        width="162px"
        max-width="162px"
        contain
      />

      <div class="flex-grow-1"></div>

      <v-toolbar-items class="hidden-xs-only">
        <v-btn text color="accent" :ripple="{ class:'primary--text' }" @click="$vuetify.goTo('#app')">Home</v-btn>

        <v-menu bottom left :offset-y="true" transition="slide-x-transition">
          <template v-slot:activator="{ on }">
            <v-btn text color="accent" :ripple="{ class:'primary--text' }" v-on="on">
              About
              <v-icon right color="primary">mdi-menu-down</v-icon>
            </v-btn>
          </template>
          <v-list rounded>
            <v-list-item v-for="(item, i) in aboutItems" :key="i" v-ripple="{ class: 'primary--text' }" @click="$vuetify.goTo(item.tag)">
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
            <v-list-item v-for="(item, i) in futureItems" :key="i" v-ripple="{ class: 'primary--text' }" @click="$vuetify.goTo(item.tag)">
              <v-list-item-title class="accent--text">{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
      </v-toolbar-items>

      <v-toolbar-items class="hidden-sm-and-up">
        <v-menu bottom left v-model="close" :close-on-content-click="false" :offset-y="true" transition="slide-x-transition">
          <template v-slot:activator="{ on }">
            <v-btn large icon v-on="on">
              <v-icon large>mdi-menu</v-icon>
            </v-btn>
          </template>
          <v-list rounded>
            <v-list-item @click="goTo('#app')">
              <v-list-item-title class="accent--text">Home</v-list-item-title>
            </v-list-item>
            <v-list-group>
              <template v-slot:activator>
                <v-list-item-title class="accent--text">About</v-list-item-title>
              </template>
              <v-list-item v-for="(item, i) in aboutItems" :key="i" v-ripple="{ class: 'primary--text' }" @click="goTo(item.tag)">
                <v-list-item-title class="primary--text">{{ item.title }}</v-list-item-title>
              </v-list-item>
            </v-list-group>
            <v-list-group>
              <template v-slot:activator>
                <v-list-item-title class="accent--text">Future</v-list-item-title>
              </template>
              <v-list-item v-for="(item, i) in futureItems" :key="i" v-ripple="{ class: 'primary--text' }" @click="goTo(item.tag)">
                <v-list-item-title class="primary--text">{{ item.title }}</v-list-item-title>
              </v-list-item>
            </v-list-group>
          </v-list>
        </v-menu>
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
          { title: 'The vision', tag: '#vision' },
          { title: 'The App', tag: '#application' },
          { title: 'Blockchain Technology', tag: '#blockchain' },
        ],
        futureItems: [
          { title: 'Learn More', tag: '#learnmore' },
          { title: 'Collaborate with us', tag:'#colla' },
        ],
        scrollYposition: 0,
        scrollMaxY: 10,
        maxElevation: 1,
        minElevation: 0,
        close: false,
      }
    },

    methods: {
      onScroll () {
        this.scrollYposition = window.pageYOffset || document.documentElement.scrollTop
      },
      goTo (tag) {
        this.$vuetify.goTo(tag);
        this.close = false;
      }
    }
  }
</script>

<style>
</style>
<template>
    <v-app-bar
      app
      elevation="6"
      color="secondary"
    >
      <v-img :src='require("../../../public/images/KaitoHealthLogoTransparentAlt.png")'
        max-height="40px"
        max-width="180px"
        contain
      />

      <div class="flex-grow-1"></div>

      <v-toolbar-items>
        <v-btn text color="accent">Home</v-btn>

        <v-menu bottom left :offset-y="true" transition="slide-x-transition">
          <template v-slot:activator="{ on }">
            <v-btn text color="accent" v-on="on">
              About
              <v-icon right color="primary">mdi-menu-down</v-icon>
            </v-btn>
          </template>
          <v-list rounded>
            <v-list-item v-for="(item, i) in aboutItems" :key="i" @click='aboutItems'>
              <v-list-item-title class="accent--text">{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>

        <v-menu bottom left :offset-y="true" transition="slide-x-transition">
          <template v-slot:activator="{ on }">
            <v-btn text color="accent" v-on="on">
              The Future
              <v-icon right color="primary">mdi-menu-down</v-icon>
            </v-btn>
          </template>
          <v-list rounded tile>
            <v-list-item v-for="(item, i) in futureItems" :key="i" @click="futureItems">
              <v-list-item-title class="accent--text">{{ item.title }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>

        <v-btn text color="accent">The Team</v-btn>

        <v-btn text color="accent">Contact</v-btn>
      </v-toolbar-items>

    </v-app-bar>
</template>

<script>
  import LogInForm from './LogInForm';
  import SignUpForm from './SignUpForm';

  export default {
    components: {
      SignUpForm,
      LogInForm,
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
      }
    }
  }
</script>

<style>
  a:focus,
  button:focus,
  input:focus,
  textarea:focus {
    outline: none;
  }
</style>
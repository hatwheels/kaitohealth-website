<template>
  <v-img
    :src='require("../../../public/images/landing-page_02.jpg")'
  >
    <v-app-bar
      app
      elevation="6"
      color='white'
    >
      <v-img :src='require("../../../public/images/KaitoHealthLogoTransparentAlt.png")'
        max-height="40px"
        max-width="180px"
        contain
      />

      <div class="flex-grow-1"></div>

      <v-btn text color="secondary">Home</v-btn>
      <v-btn text color="secondary">About</v-btn>
      <v-btn text color="secondary">The Future</v-btn>
      <v-btn text color="secondary">The Team</v-btn>
      <v-btn text color="secondary">Contact</v-btn>

    </v-app-bar>
  </v-img>
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
      }
    }
  }
</script>

<style>

</style>
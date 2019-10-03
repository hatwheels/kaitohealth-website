<template>
  <v-app>
    <StickyHeader/>

    <v-content>
      <v-container fluid>
        
        <v-card
          v-for="(img, i) in images" :key="i"
          class="d-flex flex-column" 
          color="transparent"
          flat
          min-height="700"
        >
          <v-img
            class="m-auto"
            :id="img.id"
            :src="img.url"
            contain
            max-height="500"
          >
          </v-img>
        </v-card>

      </v-container>
    </v-content>

    <MyFooter/>
  </v-app>
</template>

<script>
  import StickyHeader from './StickyHeader';
  import MyFooter from './MyFooter';

  export default {
    name: 'App',

    components: {
      StickyHeader,
      MyFooter,
    },

    data () {
      return {
        images: [
          { id: 'vision', url: require("../../../public/images/undraw_medicine.svg") },
          { id: 'team', url: require("../../../public/images/undraw_personal_information.svg") }
        ]
      }
    }
  };
</script>

<style>
  a:focus,
  button:focus,
  input:focus,
  textarea:focus {
    outline: none;
  }
</style>

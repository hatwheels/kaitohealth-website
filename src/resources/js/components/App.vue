<template>
  <v-app>
    <StickyHeader/>

    <v-content>

      <v-container fluid>
        
        <v-row v-for="(img, i) in images" :key="i" justify="space-around" align="center">
          <v-col cols=4>
            <v-card
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
          </v-col>
          <v-col cols=4>
            
            <p class="transparent accent--text display-2 font-weight-bold text-center">{{ img.text }}</p>
            
          </v-col>
        </v-row>

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
          { id: 'home', url:require("../../../public/images/undraw_sea.svg"), text:'Sail safely through the ocean of medical data' },
          { id: 'vision', url: require("../../../public/images/undraw_medicine.svg"), text:'test1' },
          { id: 'team', url: require("../../../public/images/undraw_personal_information.svg"), text:'test2' },
        ],
      }
    },

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

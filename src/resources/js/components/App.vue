<template>
  <v-app>
    <StickyHeader/>

    <v-content>
      <v-container class="px-0 pb-0" fluid>

        <v-row justify="space-around" align="center">
          <v-col cols=7 order="last">
            <v-card
              class="d-flex flex-column" 
              color="transparent"
              flat
              min-height="700"
            >
              <v-img
                class="m-auto"
                :src="require('../../../public/images/undraw_medicine.svg')"
                contain
              >
              </v-img>
            </v-card>
          </v-col>
          <v-col cols=4>
              <p
                style="line-height:1.4; top:175px"
                class="text-center transparent accent--text display-2 font-weight-bold"
              >
                <span class="primary--text">Sail over</span> an <span class="primary--text">Ocean</span> of Health Data
              </p>
              <!-- <v-card
                  flat
                  color="transparent">
                  <v-card-title class="display-1 font-weight-bold d-flex flex-column">
                      <v-avatar size=100><v-img id="collaborate" :src="require('../../../public/images/undraw_sea.svg')" contain></v-img></v-avatar>
                  </v-card-title>
                  <v-card-text
                    style="line-height:1.4; top:175px"
                    class="text-center transparent accent--text display-2 font-weight-bold"
                  >
                    <span class="primary--text">Sail over</span> an <span class="primary--text">Ocean</span> of Health Data
                  </v-card-text>
              </v-card> -->
          </v-col>
        </v-row>

        <About/>
        <Future/>

      </v-container>

    </v-content>

    <MyFooter/>
  </v-app>
</template>

<script>
  import StickyHeader from './StickyHeader';
  import MyFooter from './MyFooter';
  import About from './About';
  import Future from './Future';

  export default {
    name: 'App',

    components: {
      StickyHeader,
      MyFooter,
      About,
      Future,
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

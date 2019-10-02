<template>
  <v-app>
    <StickyHeader/>
    <v-img
      class="m-auto"
      :src='require("../../../public/images/undraw_medicine_b1ol.svg")'
      width="800"
      contain
      >
    </v-img>
    <MyFooter/>
    <v-btn text color="accent">Home</v-btn>
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
  };
</script>

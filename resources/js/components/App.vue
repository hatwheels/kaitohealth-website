<template>
  <v-app>
    <StickyHeader/>

    <v-content>
      <v-container class="px-0 pb-0" fluid>

        <Introduction/>

        <v-divider/>

        <About class="info"/>

        <v-divider/>

        <Future/>

      </v-container>

    </v-content>

    <MyFooter/>
  </v-app>
</template>

<script>
  import StickyHeader from './StickyHeader';
  import Introduction from './Introduction';
  import MyFooter from './MyFooter';
  import About from './About';
  import Future from './Future';

  export default {
    name: 'App',

    components: {
      StickyHeader,
      Introduction,
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

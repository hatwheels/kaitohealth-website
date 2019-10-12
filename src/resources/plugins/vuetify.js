import Vue from 'vue';
import Vuetify from 'vuetify';
import '@mdi/font/css/materialdesignicons.css';
import colors from 'vuetify/lib/util/colors';
import Scroll from 'vuetify/es5/directives';

Vue.use(Vuetify);

export default new Vuetify({
  theme: {
    themes: {
      light: {
        primary: '#118DD0',
        secondary: colors.shades.white,
        accent: '#3B4856',
        // error: '#f44336',
        // warning: '#ffc107',
        // info: '#03a9f4',
        // success: '#3f51b5',
      }
    },
  },
  icons: {
    iconfont: 'mdi',
  },
  directives: {
    Scroll
  }
});
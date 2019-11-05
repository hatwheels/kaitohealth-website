<template>
    <div class="pt-12 pb-12">
        <v-row v-for="(img, i) in images" :key="i" justify="space-around" align="center">
            <v-col class="hidden-xs-only" :cols="colsImg()" :order="i % 2 ? 'last' : 'first'">
                <v-card
                    color="transparent"
                    flat
                >
                    <v-img
                        class="m-auto"
                        :src="img.url"
                        contain
                        :max-height="widthImg()"
                    >
                    </v-img>
                </v-card>
            </v-col>
            <v-col :cols="colsText()" :id="img.id">
                <v-card flat color="transparent">
                    <v-card-title class="hidden-md-and-down accent--text display-2 font-weight-bold">{{ img.title }}</v-card-title>
                    <v-card-text class="hidden-md-and-down text-justify headline" v-html="img.text"/>
                    <v-card-title class="hidden-lg-and-up hidden-sm-and-down accent--text display-1 font-weight-bold">{{ img.title }}</v-card-title>
                    <v-card-text class="hidden-lg-and-up hidden-sm-and-down text-justify title" v-html="img.text"/>
                    <v-card-title class="hidden-md-and-up hidden-xs-only accent--text headline font-weight-bold">{{ img.title }}</v-card-title>
                    <v-card-text class="hidden-md-and-up hidden-xs-only text-justify body-1" v-html="img.text"/>
                    <v-row class="hidden-sm-and-up" justify="center" align="center">
                        <v-col cols=5 :order="i % 2 ? 'last' : 'first'" justify="center" align="center">
                            <v-avatar class="center" size=60><v-img :src="img.url" contain></v-img></v-avatar>
                        </v-col>
                        <v-col cols=5 justify="center" align="center">
                            <div :class="(i % 2) ? 'text-right' : 'text-left'" class="accent--text headline font-weight-bold">{{ img.title }}</div>
                        </v-col>
                    </v-row>
                    <v-card-text class="hidden-sm-and-up text-justify body-1" v-html="img.text"/>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {

    data () {
      return {
        images: [
          { id: 'vision', url: require("../../../public/images/undraw_vision.svg"), title: 'Vision', text:'Our vision is to offer everyone an easy and completely safe tool so that they can have all their medical data with them anytime, anyplace. And share any kind of data with whoever they need and choose. From doctors to hospitals, and nurses to clinics and research organizations, every patient will get to decide who sees what. Always. Safely and easy. And we start with the most important people in this world. <strong>Our kids. And their mothers.</strong>' },
          { id: 'application', url: require("../../../public/images/undraw_app.svg"), title: 'App', text:'Our mobile app will be a full <strong>Personal Health Record</strong> on your phone. All your medical history, your exams, x-rays, ultrasounds or anything, will be uploaded and safely stored by you and just for you. You will get to choose who will be able to see what, your gynecologist, other doctors, clinics, hospital and so on. And you’ll be receiving every exam or other info from them, directly to your app, anytime they upload it, so you don’t need to lose time and money.' },
          { id: 'blockchain', url: require("../../../public/images/undraw_blockchain.svg"), title: 'Blockchain', text:'The most modern and safe technology for storing data, and create a whole ecosystem of data exchange.' },
        ],
      }
    },

    methods: {
        widthImg () {
            return this.$vuetify.breakpoint.lgAndUp ? 500 : 120
        },

        colsImg () {
            return this.$vuetify.breakpoint.lgAndUp ? 4 : 3
        },

        colsText () {
            if (this.$vuetify.breakpoint.lgAndUp) {
                return 4;
            } else if (this.$vuetify.breakpoint.xsOnly) {
                return 12;
            } else return 8;
        }
    },
}
</script>
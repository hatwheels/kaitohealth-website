<template>
    <div class="pt-8">
        <v-row v-for="(img, i) in images" :key="i" justify="space-around" align="center">
            <v-col cols=4 :order="i % 2 ? 'last' : 'first'">
                <v-card
                    class="d-flex flex-column" 
                    color="transparent"
                    flat
                    min-height="500"
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
                <v-card
                    flat
                    color="transparent"
                >
                    <v-card-title
                        class="accent--text display-2 font-weight-bold"
                    >
                        {{ img.title }}
                    </v-card-title>
                    <v-card-text
                        class="subtitle-1"
                    >
                        {{ img.text }}
                    </v-card-text>
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
          { id: 'vision', url: require("../../../public/images/undraw_vision.svg"), title: 'Vision', text:'Our vision is to offer everyone an easy and completely safe tool so that they can have all their medical data with them anytime, anyplace. And share any kind of data with whoever they need and choose. From doctors to hospitals, and nurses to clinics and research organizations, every patient will get to decide who sees what. Always. Safe and easy. And we start with the most important people in this world. Our kids. And their mothers.' },
          { id: 'application', url: require("../../../public/images/undraw_app.svg"), title: 'App', text:'Our mobile app will be a full Personal Health Record on your phone. All your medical history, your exams, x-rays, ultrasounds or anything, will be uploaded and safely stored by you and just for you. You will get to choose who will be able to see what, your gynecologist, other doctors, clinics, hospital etc. And you’ll be receiving every exam or other info from them, directly to your app, anytime they upload it, so you don’t need to lose time and money.' },
          { id: 'blockchain', url: require("../../../public/images/undraw_blockchain.svg"), title: 'Blockchain', text:'The most modern and safe technology for storing data, and create a whole ecosystem of data exchange.' },
        ],
      }
    },

}
</script>
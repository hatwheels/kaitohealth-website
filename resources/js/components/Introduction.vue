<template>
    <v-row class="pt-12 pb-12" justify="space-around" align="center">
        <v-col cols=6 order="last">
        <v-card
            class="d-flex flex-column" 
            color="transparent"
            flat
        >
            <v-img
                class="m-auto"
                :height="imgHeight"
                :src="require('../../../public/images/undraw_medicine.svg')"
                contain
            >
            </v-img>
        </v-card>
        </v-col>
        <v-col cols=5>
        <p
            style="line-height:1.4; top:175px"
            class="hidden-md-and-down text-center transparent accent--text display-2 font-weight-bold"
        >
            <span class="primary--text">Sail Safely </span>over an <span class="primary--text">Ocean</span> of Health Data
        </p>
        <p
            style="line-height:1.4; top:175px"
            class="hidden-lg-and-up hidden-sm-and-down text-center transparent accent--text display-1 font-weight-bold"
        >
            <span class="primary--text">Sail Safely </span>over an <span class="primary--text">Ocean</span> of Health Data
        </p>
        <p
            style="line-height:1.4; top:175px"
            class="hidden-md-and-up hidden-xs-only text-center transparent accent--text headline font-weight-bold"
        >
            <span class="primary--text">Sail Safely </span>over an <span class="primary--text">Ocean</span> of Health Data
        </p>
        <p
            style="line-height:1.4; top:175px"
            class="hidden-sm-and-up text-center transparent accent--text title font-weight-bold"
        >
            <span class="primary--text">Sail Safely </span>over an <span class="primary--text">Ocean</span> of Health Data
        </p>
        </v-col>
    </v-row>
</template>

<script>
export default {
    computed: {
        imgHeight () {
            if (this.$vuetify.breakpoint.name == 'sm') {
                return '20rem'
            } else if (this.$vuetify.breakpoint.name == 'md') {
                return '24rem'
            } else if (this.$vuetify.breakpoint.name == 'lg') {
                return '30rem'
            } else if (this.$vuetify.breakpoint.name == 'xl') {
                return '32.1rem'
            }
        }
    }
}
</script>

<style>

</style>
<template>
    <div class="py-12">
        <v-row v-if="$vuetify.breakpoint.smAndUp" justify="space-around" align="start">
            <v-col cols=5 justify="center" align="center">
                <v-card
                    id="learnmore"
                    flat
                    color="transparent"
                >
                    <v-card-title class="accent--text d-flex flex-column">
                        <v-avatar size=60>
                            <v-img :src="learnmore.url" contain/>
                        </v-avatar>
                        <p class="mb-0 hidden-md-and-down font-weight-bold display-1 text-justify">{{ learnmore.title }}</p>
                        <p class="mb-0 hidden-lg-and-up hidden-sm-only font-weight-bold headline text-justify">{{ learnmore.title }}</p>
                        <p class="mb-0 hidden-md-and-up font-weight-bold font-weight-regular title text-justify">{{ learnmore.title }}</p>
                    </v-card-title>
                    <v-card-text class="hidden-md-and-down accent--text font-weight-regular title text-justify" v-html="learnmore.text"/>
                    <v-card-text class="hidden-lg-and-up hidden-sm-only accent--text body-1 text-justify" v-html="learnmore.text"/>
                    <v-card-text class="hidden-md-and-up accent--text body-2 text-justify" v-html="learnmore.text"/>
                    <v-text-field
                        prepend-inner-icon="mdi-email"
                        append-outer-icon="mdi-send"
                        label="Your email"
                        outlined
                        @click:append-outer="{}"
                    ></v-text-field>
                </v-card>
            </v-col>
            <v-col cols=5 justify="center" align="center">
                <v-card
                    id="colla"
                    flat
                    color="transparent"
                >
                    <v-card-title class="accent--text d-flex flex-column">
                        <v-avatar size=60>
                            <v-img :src="collaborate.url" contain/>
                        </v-avatar>
                        <p class="mb-0 hidden-md-and-down font-weight-bold display-1 text-justify">{{ collaborate.title }}</p>
                        <p class="mb-0 hidden-lg-and-up hidden-sm-only font-weight-bold headline text-justify">{{ collaborate.title }}</p>
                        <p class="mb-0 hidden-md-and-up font-weight-bold font-weight-regular title text-justify">{{ collaborate.title }}</p>
                    </v-card-title>
                    <v-card-text class="hidden-md-and-down accent--text font-weight-regular title text-justify" v-html="collaborate.text"/>
                    <v-card-text class="hidden-lg-and-up hidden-sm-only accent--text body-1 text-justify" v-html="collaborate.text"/>
                    <v-card-text class="hidden-md-and-up accent--text body-2 text-justify" v-html="collaborate.text"/>
                </v-card>
            </v-col>
        </v-row>
        <div v-else>
            <v-row justify="space-around" align="center">
                <v-col cols=10 justify="center" align="center">
                    <v-card
                        id="learnmore"
                        flat
                        color="transparent"
                    >
                        <v-row justify="center" align="center">
                            <v-avatar size=60>
                                <v-img
                                    :src="learnmore.url"
                                    contain
                                />
                            </v-avatar>
                            <v-card-title class="accent--text font-weight-regular title font-weight-bold">{{ learnmore.title }}</v-card-title>
                        </v-row>
                        <v-card-text class="accent--text body-2 text-justify" v-html="learnmore.text"/>
                        <v-card width="400" color="transparent" flat>
                            <v-text-field
                                class="px-4"
                                prepend-inner-icon="mdi-email"
                                append-outer-icon="mdi-send"
                                label="Your email"
                                outlined
                                @click:append-outer="{}"
                            ></v-text-field>
                        </v-card>
                    </v-card>
                </v-col>
            </v-row>
            <v-row justify="center" align="center">
                <v-col cols=10 justify="center" align="center">
                    <v-card
                        id="colla"
                        flat
                        color="transparent"
                    >
                        <v-row justify="center" align="center">
                            <v-avatar size=60>
                                <v-img
                                    :src="collaborate.url"
                                    contain
                                />
                            </v-avatar>
                            <v-card-title class="accent--text font-weight-regular title font-weight-bold">{{ collaborate.title }}</v-card-title>
                        </v-row>
                        <v-card-text class="accent--text body-2 text-justify" v-html="collaborate.text"/>
                    </v-card>
                </v-col>
            </v-row>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            learnmore: {
                url: require('../../../public/images/undraw_learnmore.svg'), title: 'Learn More', text: "Interested in us? Share us your email and we'll send you a <strong>monthly newsletter</strong>."
            },

            collaborate: {
                url: require('../../../public/images/undraw_collaborate.svg'), title: 'Collaborate with us', text: "Are you a doctor, health professional, clinic, diagnostic center or a hospital director and interested in our solutions? Say no more, just <a href='mailto:hello@kaitohealth.com'><strong>contact us</strong></a>."
            }
        }
    }
}
</script>

<style>
</style>
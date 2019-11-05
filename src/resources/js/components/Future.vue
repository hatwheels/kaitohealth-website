<template>
    <div class="py-8">
        <v-row v-if="$vuetify.breakpoint.mdAndUp" justify="space-around" align="center">
            <v-col cols=5>
                <v-card
                    id="learnmore"
                    flat
                    color="transparent"
                >
                    <v-card-title class="accent--text display-1 font-weight-bold d-flex flex-column">
                        <v-avatar size=60>
                            <v-img :src="learnmore.url" contain/>
                        </v-avatar>
                        <p>{{ learnmore.title }}</p>
                    </v-card-title>
                    <v-card-text class="accent--text subtitle-1 text-left" v-html="learnmore.text"/>
                    <v-text-field
                        prepend-inner-icon="mdi-email"
                        append-outer-icon="mdi-send"
                        label="Your email"
                        outlined
                        @click:append-outer="{}"
                    ></v-text-field>
                </v-card>
            </v-col>
            <v-col cols=5>
                <v-card
                    id="colla"
                    flat
                    color="transparent"
                >
                    <v-card-title class="accent--text d-flex flex-column">
                        <v-avatar size=60>
                            <v-img :src="collaborate.url" contain/>
                        </v-avatar>
                        <p class="display-1 font-weight-bold">{{ collaborate.title }}</p>
                    </v-card-title>
                    <v-card-text class="accent--text body-1 text-left" v-html="collaborate.text"/>
                </v-card>
            </v-col>
        </v-row>
        <div v-else>
            <v-row justify="space-around" align="center">
                <v-col justify="center">
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
                            <v-card-title class="hidden-sm-and-down accent--text display-1 font-weight-bold">{{ learnmore.title }}</v-card-title>
                            <v-card-title class="hidden-md-only accent--text headline font-weight-bold">{{ learnmore.title }}</v-card-title>
                        </v-row>
                        <v-card-text class="accent--text body-1 text-justify" v-html="learnmore.text"/>
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
                <v-col>
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
                            <v-card-title class="hidden-sm-and-down accent--text display-1 font-weight-bold">{{ collaborate.title }}</v-card-title>
                            <v-card-title class="hidden-md-only accent--text headline font-weight-bold">{{ collaborate.title }}</v-card-title>
                        </v-row>
                        <v-card-text class="accent--text body-1 text-justify" v-html="collaborate.text"/>
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
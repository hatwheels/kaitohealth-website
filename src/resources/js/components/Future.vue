<template>
    <div class="py-8 info">
        <v-row justify="space-around">
            <v-col cols=4>
                <v-card
                    flat
                    color="info">
                <v-card-title class="accent--text display-1 font-weight-bold d-flex flex-column">
                    <v-avatar size=60><v-img id="learnmore" :src="require('../../../public/images/undraw_learnmore.svg')" contain></v-img></v-avatar>
                    <p>Learn More</p>
                </v-card-title>
                    <v-card-text class="accent--text subtitle-1 text-left">Interested in us? Share us your email and we'll send you a <strong>monthly newsletter</strong>.</v-card-text>
                    <v-text-field
                        prepend-inner-icon="mdi-email"
                        append-outer-icon="mdi-send"
                        label="Your email"
                        outlined
                        @click:append-outer="{}"
                    ></v-text-field>
                </v-card>
            </v-col>
            <v-col cols=4>
                <v-card
                    flat
                    color="info">
                    <v-card-title class="accent--text display-1 font-weight-bold d-flex flex-column">
                        <v-avatar size=60><v-img id="collaborate" :src="require('../../../public/images/undraw_collaborate.svg')" contain></v-img></v-avatar>
                        <p>Collaborate with us</p>
                    </v-card-title>
                    <v-card-text class="accent--text subtitle-1 text-left">Are you a doctor, health professional, clinic, diagnostic center or a hospital director and interested in our solutions? Say no more, just <a href="mailto:hello@kaitohealth.com"><strong>contact us</strong></a>.</v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<style>

</style>
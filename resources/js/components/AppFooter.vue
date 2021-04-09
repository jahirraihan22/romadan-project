<template>
  <v-card
    flat
    tile
    class="py-3 mx-auto my-3 lighten-1 white--text text-center"
    color="#2A3B4D"
    max-width="600"
  >
    <v-card-text class="white--text pt-0">
      সূত্র: বাংলাদেশ আবহাওয়া (www.bmd.gov.bd) | www.muslimpro.com | আল জামি'আহ আস-সালাফিয়্যাহ | গণনা পদ্ধতি:
      University of Islamic Sciences, Karachi
    </v-card-text>

    <v-divider></v-divider>

    <v-card-text class="white--text">
      {{ new Date().getFullYear() }} — <strong>&copy;Jahir Raihan</strong>
    </v-card-text>
  </v-card>
</template>
<script>
export default {};
</script>

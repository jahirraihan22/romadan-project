<template>
  <v-card class="mx-auto my-12" max-width="374">
    <template slot="progress">
      <v-progress-linear
        color="deep-purple"
        height="10"
        indeterminate
      ></v-progress-linear>
    </template>

    <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png"></v-img>

    <v-card-title>Cafe Badilico</v-card-title>

    <v-card-text>
      <v-row align="center" class="mx-0">
        <v-rating color="amber" dense half-increments readonly size="14"></v-rating>

        <div class="grey--text ml-4">4.5 (413)</div>
      </v-row>

      <div class="my-4 subtitle-1">$ • Italian, Cafe</div>

      <div>
        Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus
        patio seating.
      </div>
    </v-card-text>

    <v-divider class="mx-4"></v-divider>

    <v-card-title>Tonight's availability</v-card-title>

    <v-card-text>
      <select-divishions-districts/>
      <v-chip-group active-class="deep-purple accent-4 white--text" column>
        <v-chip>5:30PM</v-chip>

        <v-chip>7:30PM</v-chip>

        <v-chip>8:00PM</v-chip>

        <v-chip>9:00PM</v-chip>
      </v-chip-group>
    </v-card-text>

    <v-card-actions>
      <!-- <v-btn
        color="deep-purple lighten-2"
        text
      >
        Reserve
      </v-btn> -->
    </v-card-actions>
  </v-card>
</template>
<script>
import SelectDivishionsDistricts from './SelectDivishionsDistricts.vue';
export default {
  components: {SelectDivishionsDistricts},
  data() {
    return {
      items: {
        romadan: "",
        date: "",
      },
      date: "2021-04-17",
    };
  },
  methods: {
    formatDate() {
      var d = new Date(),
        month = "" + (d.getMonth() + 1),
        day = "" + d.getDate(),
        year = d.getFullYear();

      if (month.length < 2) month = "0" + month;
      if (day.length < 2) day = "0" + day;

      return [year, month, day].join("-");
    },
    getDateRomadan() {
      //   this.date = this.formatDate();
      axios
        .get(`/api/romadans/${this.date}`)
        .then((response) => {
          this.items.romadan = response.data[0].romadan;
          this.items.date = response.data[0].date;
          //   console.log('response :>> ', this.items);
          console.log("response.data.date :>> ", response.data[0].romadan);
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    getAllRomadan() {
      //   this.date = this.formatDate();
      axios
        .get(`/api/romadans`)
        .then((response) => {
          this.items.romadan = response.data[0].romadan;
          this.items.date = response.data[0].date;
          //   console.log('response :>> ', this.items);
          console.log("response.data.date :>> ", response.data[0].romadan);
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    
  },
  created() {
    this.getDateRomadan();
    this.getAllRomadan();
  },
};
</script>

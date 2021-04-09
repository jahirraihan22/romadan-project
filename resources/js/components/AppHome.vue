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

    <v-card-title>{{ items.romadan }} , ১৪৪২ হিজরি</v-card-title>

    <v-card-text>
      <v-row align="center" class="mx-0">
        <div class="black--text my-4">{{ today }}</div>
      </v-row>

      <div>
        Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus
        patio seating.
      </div>
    </v-card-text>

    <v-divider class="mx-4"></v-divider>

    <v-card-title>আপনার জেলার ইফতার ও সাহরির সময়সূচী দেখুন</v-card-title>

    <v-card-text>
      <select-divishions-districts />
      <v-alert color="#2A3B4D" dark icon="mdi-map" dense>
        <b>{{ district }}</b> ও পার্শ্ববর্তী এলাকার ইফতার ও সাহরির সময়সূচী
      </v-alert>
      <v-chip-group active-class="deep-purple accent-4 white--text" column>
        <v-chip class="ma-2" color="teal" dark label> সাহরি </v-chip>
        <v-chip class="ma-2" color="indigo" label text-color="white">
          <v-icon left> mdi-clock </v-icon>
          {{ sahri }}
        </v-chip>
      </v-chip-group>

      <v-chip-group active-class="deep-purple accent-4 white--text" column>
        <v-chip class="ma-2" color="teal" dark label> ইফতার </v-chip>
        <v-chip class="ma-2" color="indigo" label text-color="white">
          <v-icon left> mdi-clock </v-icon>
          {{ iftar }}
        </v-chip>
      </v-chip-group>
    </v-card-text>

    <v-card-actions>
      <v-btn
        color="deep-purple lighten-2"
        text
      >
        Reserve
      </v-btn>
    </v-card-actions>
  </v-card>
</template>
<script>
import SelectDivishionsDistricts from "./SelectDivishionsDistricts.vue";
export default {
  components: { SelectDivishionsDistricts },
  data() {
    return {
      items: {
        romadan: "",
        date: "",
        day: "",
        sahri: "",
        ifatr: "",
      },
      currentDate: "2021-04-14",
      sahri: "",
      iftar: "",
      district: "ঢাকা",
      today: "",
    };
  },
  methods: {
    checkSahriTime(addSahriTime, sahri) {
      let defaultTime = moment.duration(this.items.sahri, "HH:mm:ss");
      let addedTime = moment.duration(sahri, "HH:mm:ss");

      if (addSahriTime) {
        this.sahri = addedTime.add(defaultTime);
        this.sahri =
          this.formatTime(this.sahri.hours()) +
          ":" +
          this.formatTime(this.sahri.minutes()) +
          ":" +
          this.formatTime(this.sahri.seconds());
      } else {
        this.sahri = defaultTime.subtract(addedTime);
        this.sahri =
          this.formatTime(this.sahri.hours()) +
          ":" +
          this.formatTime(this.sahri.minutes()) +
          ":" +
          this.formatTime(this.sahri.seconds());
      }
      this.sahri = moment(this.sahri, "HH:mm").format("LT").replace("সময়", "");
    },
    checkIftarTime(addIftarTime, iftar) {
      let defaultTime = moment.duration(this.items.iftar, "HH:mm:ss");
      let addedTime = moment.duration(iftar, "HH:mm:ss");

      if (addIftarTime) {
        this.iftar = addedTime.add(defaultTime);
        this.iftar =
          this.formatTime(this.iftar.hours()) +
          ":" +
          this.formatTime(this.iftar.minutes()) +
          ":" +
          this.formatTime(this.iftar.seconds());
      } else {
        this.iftar = defaultTime.subtract(addedTime);
        this.iftar =
          this.formatTime(this.iftar.hours()) +
          ":" +
          this.formatTime(this.iftar.minutes()) +
          ":" +
          this.formatTime(this.iftar.seconds());
      }
      this.iftar = moment(this.iftar, "HH:mm").format("LT").replace("সময়", "");
    },
    getTimeOfDistrict() {
      EventBus.$on("getTime", (getDistrictdetails) => {
        this.district = getDistrictdetails[0].name;
        // TODO format iftar sahri time;
        // difference of sahri and iftar
        let diffSahri =
          "00:" + this.formatTime(Math.abs(getDistrictdetails[0].sahri)) + ":00";

        let diffIftar =
          "00:" + this.formatTime(Math.abs(getDistrictdetails[0].iftar)) + ":00";

        // TODO set default iftar sahri time;

        // routing negative sahri ifatr value;
        let addSahriTime = getDistrictdetails[0].sahri > 0 ? true : false;
        let addIftarTime = getDistrictdetails[0].iftar > 0 ? true : false;

        this.checkSahriTime(addSahriTime, diffSahri);
        this.checkIftarTime(addIftarTime, diffIftar);

        // take another function keep clean this event;
      });
    },
    formatDate() {
      var d = new Date(),
        month = "" + (d.getMonth() + 1),
        day = "" + d.getDate(),
        year = d.getFullYear();

      if (month.length < 2) month = "0" + month;
      if (day.length < 2) day = "0" + day;

      return [year, month, day].join("-");
    },
    formatTime(value) {
      return value < 10 ? "0" + value : value;
    },
    getDateRomadan() {
      this.currentDate =
        this.formatDate() < "2021-04-14" ? "2021-04-14" : this.formatDate();
      axios
        .get(`/api/romadans/${this.currentDate}`)
        .then((response) => {
          this.items.romadan = response.data[0].romadan;
          this.items.date = response.data[0].date;
          this.items.day = response.data[0].day;
          this.items.sahri = response.data[0].sahri;
          this.items.iftar = response.data[0].iftar;
          this.sahri = moment(this.items.sahri, "HH:mm").format("LT").replace("সময়", "");
          this.iftar = moment(this.items.iftar, "HH:mm").format("LT").replace("সময়", "");
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    getAllRomadan() {
      axios
        .get(`/api/romadans`)
        .then((response) => {
          this.items.romadan = response.data[0].romadan;
          this.items.date = response.data[0].date;
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    getToday() {
      this.today = moment().format("LLLL").replace("সময়", "");
    },
  },
  created() {
    moment.locale("bn-bd");

    this.getDateRomadan();
    // this.getAllRomadan();
    this.getTimeOfDistrict();
    setInterval(() => {
      this.getToday();
    }, 1000);
  },
};
</script>

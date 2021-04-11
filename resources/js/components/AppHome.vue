<template>
  <div>
    <v-card class="mx-auto" max-width="600">
      <template slot="progress">
        <v-progress-linear
          color="deep-purple"
          height="10"
          indeterminate
        ></v-progress-linear>
      </template>

      <v-img height="300" src="https://wallpapercave.com/wp/wp1832079.jpg"></v-img>

      <v-card-title>{{ items.romadan }} , ১৪৪২ হিজরি</v-card-title>

      <v-card-text>
        <v-row align="center" class="mx-0">
          <div class="black--text my-4">
            <b>{{ today }}</b>
          </div>
        </v-row>

        <div class="black--text">
          জান্নাতের আটটি দরজা রয়েছে। এর মধ্যে একটি দরজার নাম ‘রাইয়ান’। এ দরজা দিয়ে শুধু
          রোজাদারগণ প্রবেশ করবে। অন্যরাও এই দরজা দিয়ে প্রবেশ করতে চাইবে। কিন্তু রোজাদার
          ব্যতীত অন্য কাউকে এ দরজা দিয়ে প্রবেশ করতে দেওয়া হবে না। (বুখারি ও মুসলিম)।
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
          <v-chip class="ma-2" color="#2A3B4D" dark label> সাহরি </v-chip>
          <v-chip  class="ma-2" color="#2A3B4D" label dark>
            <v-icon left> mdi-clock </v-icon>
            {{ sahri }}
          </v-chip>

          <v-chip  class="ma-2" color="#2A3B4D" label dark>
            আর মাত্র &nbsp; <strong> {{ leftTimeSahri }} </strong> &nbsp;বাকি
          </v-chip>
        </v-chip-group>

        <v-chip-group active-class="deep-purple accent-4 white--text" column>
          <v-chip class="ma-2" color="#2A3B4D" dark label> ইফতার </v-chip>
          <v-chip class="ma-2" color="#2A3B4D" label dark >
            <v-icon left> mdi-clock </v-icon>
            {{ iftar }}
          </v-chip>

          <v-chip  dark class="ma-2" color="#2A3B4D" label>
            আর মাত্র &nbsp; <strong> {{ leftTimeIftar }} </strong> &nbsp;বাকি
          </v-chip>
        </v-chip-group>
      </v-card-text>
    </v-card>
    <app-footer />
  </div>
</template>
<script>
import AppFooter from "./AppFooter.vue";
import SelectDivishionsDistricts from "./SelectDivishionsDistricts.vue";
export default {
  components: { SelectDivishionsDistricts, AppFooter },
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
      leftTimeSahri: "",
      leftTimeIftar: "",
    };
  },
  methods: {
    checkSahriTime(addSahriTime, sahri) {
      let defaultTime = moment.duration(this.items.sahri, "HH:mm:ss");
      let addedTime = moment.duration(sahri, "HH:mm:ss");
      let getDistShariTime = "";

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
      getDistShariTime = this.sahri;
      this.sahri = moment(this.sahri, "HH:mm").format("LT").replace("সময়", "");
      return getDistShariTime;
    },
    checkIftarTime(addIftarTime, iftar) {
      let defaultTime = moment.duration(this.items.iftar, "HH:mm:ss");
      let addedTime = moment.duration(iftar, "HH:mm:ss");
      let getDistIftarTime = "";

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
      getDistIftarTime = this.iftar;
      this.iftar = moment(this.iftar, "HH:mm").format("LT").replace("সময়", "");
      return getDistIftarTime;
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

        this.items.sahri = this.checkSahriTime(addSahriTime, diffSahri);
        this.items.iftar = this.checkIftarTime(addIftarTime, diffIftar);

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
    timeDiff(t) {
      let now = t;
      let then = moment().format("HH:mm:ss");

      return moment
        .utc(moment(now, "HH:mm:ss").diff(moment(then, "HH:mm:ss")))
        .format("HH:mm:ss");
    },
  },
  created() {
    moment.locale("bn-bd");

    this.getDateRomadan();
    // this.getAllRomadan();
    this.getTimeOfDistrict();
    setInterval(() => {
      this.getToday();
      this.leftTimeSahri = this.timeDiff(this.items.sahri);
      this.leftTimeIftar = this.timeDiff(this.items.iftar);
    }, 1000);
  },
};
</script>

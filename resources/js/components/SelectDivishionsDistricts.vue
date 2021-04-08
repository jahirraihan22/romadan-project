<template>
  <div>
    <v-container fluid>
      <v-row align="center">
        <v-col class="d-flex" cols="12" sm="6">
          <v-select
            :items="divishions"
            item-value="id"
            @change="getDistricts($event)"
            item-text="name"
            label="বিভাগ"
            dense
          ></v-select>
        </v-col>
        <v-col class="d-flex" cols="12" sm="6">
          <v-select
            :disabled="!isDisabled"
            :items="districts"
            item-value="id"
            item-text="name"
            label="জেলা"
            @change="getTime($event)"
            dense
          ></v-select>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>
<script>
export default {
  data() {
    return {
      divishions: [],
      districts: [],
      getDistrictDetails: [],
      isDisabled: false,
    };
  },
  methods: {
    getDivishions() {
      axios
        .get(`/api/divishions`)
        .then((response) => {
          this.divishions = response.data;
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    getDistricts(div_id) {
      this.isDisabled = true;
      axios
        .get(`/api/districts/divishion/${div_id}`)
        .then((response) => {
          this.districts = response.data;
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
    getTime(event) {
      axios
        .get(`/api/districts/${event}`)
        .then((response) => {
          this.getDistrictDetails = response.data;
          EventBus.$emit("getTime", this.getDistrictDetails);
        })
        .catch((error) => {
          console.log("error :>> ", error);
        });
    },
  },
  created() {
    this.getDivishions();
  },
};
</script>

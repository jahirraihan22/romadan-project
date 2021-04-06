<template>
<div>
    <v-container>
        <v-card>
            <v-card-title>
                আজকের সেহরি ও ইফতারের সময়সূচী 
            </v-card-title>
            <v-card-text>
                {{ items.romadan }}
                {{ items.date }}
            </v-card-text>
        </v-card>
    </v-container>
</div>
</template>
<script>
export default {
  components: {  },
  data() {
      return {
          items : {
              romadan:'',
              date:'',
          },
          date : '2021-04-17'
      }
  },
  methods: {
       formatDate() {
        var d = new Date(),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;

        return [year, month, day].join('-');
    }
  },
  created() {
    //   this.date = this.formatDate();
      axios.get(`/api/romadans/${this.date}`)
      .then(response=>{
          this.items.romadan = response.data[0].romadan;
          this.items.date = response.data[0].date;
        //   console.log('response :>> ', this.items);
        console.log('response.data.date :>> ', response.data[0].romadan);
      })
      .catch(error=>{
          console.log('error :>> ', error);
      });
  }
    
}
</script>
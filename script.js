const {createApp} = Vue;

createApp({
  data(){
    return{
      apiUrl:'server.php',
      discs: [],
      discSelected:{}
    }
  },
  methods: {
    getApi(){
      axios.get(this.apiUrl)
        .then(result =>{
          this.discs = result.data;
          console.log(result.data);
          console.log('result.data');
        })
    },
    selectedDisc(disc){
      this.discSelected=disc;
    }
  },
  mounted() {
    this.getApi();
  },
  
}).mount('#app')
const {createApp} = Vue;

createApp({
  data(){
    return{
      apiUrl:'server.php',
      discs: [],
      info:false
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
  },
  mounted() {
    this.getApi();
  },
  function(){
    // selectedDisc(disc){
      
    // }
  }
}).mount('#app')
const {createApp} = Vue;

createApp({
  data(){
    return{
      apiUrl:'server.php',
      discs: [],
      discSelected:{},
      newDisc:{
        title:'',
        cover:'',
        genre:'',
        year:''
      }
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
      console.log(this.discSelected);
    },
    addDisc(){
      const data = new FormData();
      data.append("newTitle",this.newDisc.title)
    }
  },
  mounted() {
    this.getApi();
  },
  
}).mount('#app')
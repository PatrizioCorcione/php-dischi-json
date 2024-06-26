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
        year:'',
        autor:''
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
      data.append("newCover",this.newDisc.cover)
      data.append("newGenre",this.newDisc.genre)
      data.append("newYear",this.newDisc.year)
      data.append("newAutor",this.newDisc.autor)

      axios.post(this.apiUrl,data)
      .then(result =>{
        this.discs= result.data
        console.log(result.data);
      })

      this.newDisc={
        title:'',
        cover:'',
        genre:'',
        year:'',
        autor:''
      }
    },
    delDisc(index){
      if (confirm('Sicuro di voler rimuovere il disco dalla lista ?')) {
        
        const data = new FormData();
        data.append('discDel',index)
        axios.post(this.apiUrl,data)
        .then(result =>{
          this.discs= result.data
        })
      }
    },
    addLike(index){
      const data = new FormData();
      data.append('likeIndex',index)
      axios.post(this.apiUrl,data)
      .then(result =>{
        this.discs= result.data
      })
    }
  },
  mounted() {
    this.getApi();
  },
  
}).mount('#app')
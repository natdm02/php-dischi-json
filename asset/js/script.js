const {createApp} = Vue

createApp({
       
    data(){

        return{
            
            apiUrl: 'server.php',
            data:'',
            dettagliodisco: '',

        }

    },

    

    methods:{

        chiamataApi(){
            //console.log("api");

            axios.get(this.apiUrl)
            .then((response) => {
                //console.log("api2");
                this.data = response.data;
            })
        },

        showcard( index ) {

            
            const datoindice = {
              discoindice: index
            }
      
            
            axios.post( this.apiUrl, datoindice, {headers: {'Content-Type':'multipart/form-data'}} )
              .then( (res)=> {
                  this.dettagliodisco = res.data;
              })
    
    },
},
    mounted(){
        this.chiamataApi();
    },



}).mount('#app')
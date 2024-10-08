const {createApp} = Vue

createApp({
       
    data(){

        return{
            
            apiUrl: 'server.php',
            data: [],
            dettagliodisco: {},
            showModal: false,

        };

    },

    

    methods:{

        chiamataApi(){
            //console.log("api");

            axios.get(this.apiUrl)
            .then((response) => {
                //console.log("api2");
                this.data = response.data;
            });
        },

        showcard( index ) {

            
            const datoindice = {
              discoindice: index
            };
      
            
            axios.post( this.apiUrl, datoindice, { headers: {'Content-Type':'multipart/form-data'}} )
              .then( (response)=> {

                  console.log(response.data);
                  this.dettagliodisco = response.data;

                  const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
                  modal.show();
              });
            
    
    },
},
    mounted(){
        this.chiamataApi();
    },



}).mount('#app')
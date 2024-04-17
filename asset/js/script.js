const { createApp } = Vue

createApp({
    data(){
        return{
        apiUrl:'server.php',
        data: '',
        dettagliodisco: '',
        }
    },


    methods:{
    
        chiamataApi(){
            axios.get( this.apiUrl)
            .then((res) => {
                this.data = res.data
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

        }
    },
    mounted() {
        this.chiamataApi();
    },

}).mount('#app')
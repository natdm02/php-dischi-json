const {createApp} = Vue

createApp({
       
    data(){

        return{
            
            apiUrl: 'server.php',
            data:'',

        }

    },

    created(){
        console.log("cre");
    },

    methods:{

        chiamataApi(){
            console.log("api");

            axios.get(this.apiurl)
            .then((response) => {
                console.log("api2");
                this.data = response.data;
            })
        }
    
    }


}).mount('#app')
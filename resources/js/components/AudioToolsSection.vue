<!-- THIS IS THE PARENT COMPONENT -->
<template>
    <div class="content-style gap-10">
        <audio-component 
            v-for="(buttons, index) in buttons" 
            :key="index" 
            :btnLabel="buttons.option_name" 
            :btnImageSrc="buttons.option_image_src" 
        />
    </div>
</template>
<script>
import AudioComponent from './AudioComponent.vue';
import axios from 'axios';

let dir_data = 'http://127.0.0.1:8000/options';

export default {
    components: {
        AudioComponent
    },
    data() /* database table name: `options` columns: `option_name`, `option_image_src` */
    {
        return {
            buttons: []
        };
    },
    mounted(){
        this.loadOptions(); //load the options when the component is added
    },
    methods: {
        async loadOptions(){
            try{
                const response = await axios.get('http://127.0.0.1:8000/options');
                this.buttons = response.data;
                console.log(response.data);
            } catch(error){
                console.error('Error loading the options: ', error);
            }
        }
    }
};
</script>


<!-- button:[ 
    {
        name: "Master Track",
        imgsrc: "https://th.bing.com/th/id/R.5947b89e564be064930ad9fc96d1f11e?rik=OAHX4feNsN4nAQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fheadphones-transparent-png%2fheadphones-transparent-png-16.png&ehk=79lEjJ%2fz48Rj3sRvpCPEimp2Eum9%2bIrgpy%2bFHO4yzE8%3d&risl=&pid=ImgRaw&r=0"
    },
    {
        name: "Slow+Reverb",
        imgsrc: "https://cdn-icons-png.flaticon.com/512/1247/1247847.png"
    },
    {
        name: "Speedup",
        imgsrc: "https://www.pinclipart.com/picdir/big/0-7865_speed-car-icon-png-clipart.png"
    },
    {
        name: "Cleanup",
        imgsrc: "https://th.bing.com/th/id/R.4104f6251bb1ff0e8338ec36e92f5395?rik=6hhVa9vpaJN%2baA&pid=ImgRaw&r=0"
    }
]  
-->
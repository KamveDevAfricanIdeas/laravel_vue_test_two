import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue';

import WelcomeComp from './components/Welcome.vue';
import Navbar from './components/Navbar.vue';
import Uploader from './components/FileUploadComponent.vue';
createApp({
    components:{
        Navbar
    }
}).mount('#navbar');
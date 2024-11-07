import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue';

import Navbar from './components/Navbar.vue';
import Uploader from './components/FileUploadComponent.vue';

const navbar_app = createApp({
    components: { Navbar }
});

const fileupload_app = createApp({
    components: { Uploader }
});

navbar_app.mount('#navbar');
fileupload_app.mount('#uploader');
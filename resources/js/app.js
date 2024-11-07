import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue';

import Navbar from './components/Navbar.vue';
import Uploader from './components/FileUploadComponent.vue';
import AudioSection from './components/AudioToolsSection.vue';

const navbar_app = createApp({
    components: { Navbar }
});
const fileupload_app = createApp({
    components: { Uploader }
});

const audiosection_app = createApp(AudioSection);
audiosection_app.mount('#audiosection');

navbar_app.mount('#navbar');
fileupload_app.mount('#uploader');
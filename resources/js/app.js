// app.js
import './bootstrap';
import '../css/app.css'; 

// tiktok.js
import { tikTok } from './vendor/tikTok.js';
tikTok();

// Vue
import {createApp} from 'vue';
import App from './App.vue';
const app = createApp(App);

// Axios
import VueAxios from "vue-axios";
app.use(VueAxios, axios);

// Mount app
app.mount("#app");

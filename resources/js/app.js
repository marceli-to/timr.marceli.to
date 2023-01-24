// app.js
import './bootstrap';
import '../css/app.css'; 

// tiktok.js
import { tikTok } from './plugins/tikTok.js';
tikTok();

// Vue
import {createApp} from 'vue';
import App from './App.vue';
const app = createApp(App);

// Axios
import VueAxios from "vue-axios";
app.use(VueAxios, axios);

// Axios interceptors
import './plugins/interceptor';

// Pinia store
import { createPinia } from "pinia";
app.use(createPinia());

// Mount app
app.mount("#app");

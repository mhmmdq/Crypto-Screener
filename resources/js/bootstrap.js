try {
    require('bootstrap');
} catch (e) {}

import vue from 'vue';
window.Vue = vue;

import axios from "axios";
window.axios = axios;

window.applicationData = {
    csrf : document.querySelector('meta[name="_token"]').content ,
    name : document.querySelector('meta[name="_appname"]').content,
    baseUrl : document.querySelector('meta[name="site_url"]').content
}

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import './bootstrap';

import Application from "./components/Application";

const app = new Vue({
    el: '#app',
    render : h => h(Application) ,
    mounted() {

    }
});

window.Vue = require('vue');
window.axios = require('axios');
import router from './router'

const bus = new Vue()

const app = new Vue({
    router,
    el: '#app',
});

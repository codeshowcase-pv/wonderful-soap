/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import router from "./router/router";

window.Vue = require('vue');

Vue.component('app-component', require('./components/App.vue').default);

const app = new Vue({
    el: '#app',
    router
});


// admin
import VueMaterial from "vue-material";
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default.css';

Vue.use(VueMaterial);

Vue.component('admin-component', require('./admin/admin.vue').default);

const admin_app = new Vue({
    el: '#admin'
});

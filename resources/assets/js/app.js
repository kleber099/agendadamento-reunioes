/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import CriarReuniao from './components/reuniao/CriarReuniao.vue';

import ElementUI from 'element-ui';
import Vuex from 'vuex';

import store from './store';

window.Vue = require('vue');
window.Vue.use(ElementUI);
window.Vue.use(Vuex);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));


const app = new Vue({
    el: '#app',
    store,
    components: {CriarReuniao}
});

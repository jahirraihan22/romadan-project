/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// to create custom event 
window.EventBus = new Vue();

import Vue from 'vue';
import Vuetify from 'vuetify';

import moment from 'moment'

window.moment = moment

Vue.use(Vuetify);

import AppHome from './components/AppHome';

const app = new Vue({
    vuetify : new Vuetify(),
    el: '#app',
    components: {
        AppHome,
    }
});
require('../js/bootstrap');
require('../js/adminlte');

import Vue from 'vue';
import router from './router';
import App from './views/App.vue';

new Vue({
	router,
	el : '#app',
	render : h => h(App)
})
import Vue from 'vue';
import VueRouter from 'vue-router';

import Beranda from './views/contents/Beranda.vue';
import Pendaftaran from './views/contents/Pendaftaran.vue';

Vue.use(VueRouter);

const router = new VueRouter({
	mode : 'history',
	routes : [
		{
			path : '/admin/beranda',
			name : 'beranda',
			component : Beranda
		},
		{
			path : '/admin/pendaftaran',
			name : 'pendaftaran',
			component : Pendaftaran
		}
	]
});

export default router;
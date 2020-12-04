require('./bootstrap');

require('moment');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import * as VueGoogleMaps from 'vue2-google-maps';
import store from './store'


Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueGoogleMaps, {
    load: {
      key: "AIzaSyBorbHbjQajqyRY8MqVtYlImfBHKmD-vjA",
      libraries: "places" // necessary for places input
    }
  });

const app = document.getElementById('app');

new Vue({
    store,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);

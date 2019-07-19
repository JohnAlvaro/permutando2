
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet';
import { Icon } from 'leaflet'
import 'leaflet/dist/leaflet.css'

require('./bootstrap');

window.Vue = require('vue');


import Router from 'vue-router'

Vue.use(Router)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('lista-usuarios', require('./admin/Usuarios.vue'));
Vue.component('lista-inmuebles', require('./admin/Inmueble.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));

//Web
Vue.component('form-inmueble', require('./web/Form.vue'));
Vue.component('web-index', require('./web/Index.vue'));
Vue.component('tengo', require('./web/Tengo.vue'));
Vue.component('busco', require('./web/Busco.vue'));
Vue.component('leaflet', require('./web/Leaflet.vue'));


Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);

delete Icon.Default.prototype._getIconUrl;

Icon.Default.mergeOptions({
    iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
    iconUrl: require('leaflet/dist/images/marker-icon.png'),
    shadowUrl: require('leaflet/dist/images/marker-shadow.png')
});


// let router = new Router({
//     routes: [
//         {
//             path: '/form/venta',
//             component: require('./web/Form.vue').default
//         }
        
//     ],
//     linkExactActiveClass: 'active',
//     // mode: 'history',
// });

const app = new Vue({
    el: '#app',
    // router
});

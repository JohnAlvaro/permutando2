
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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

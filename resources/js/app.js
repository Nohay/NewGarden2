/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('heady', require('./components/heady.vue').default);
Vue.component('parallax1', require('./components/parallax1.vue').default);
Vue.component('transition1', require('./components/transition1.vue').default);
Vue.component('parallax2', require('./components/parallax2.vue').default);
Vue.component('transition2', require('./components/transition2.vue').default);
Vue.component('parallax3', require('./components/parallax3.vue').default);
Vue.component('transition3', require('./components/transition3.vue').default);
Vue.component('parallax4', require('./components/parallax4.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

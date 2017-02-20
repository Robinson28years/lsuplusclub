
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import router from './routes';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// Vue.component('top-card', require('./components/top-card.vue'));
Vue.component('pu-nav', require('./components/pu-nav.vue'));
Vue.component('jumbotron', require('./components/Jumbotron.vue'));
Vue.component('comment', require('./components/Comment.vue'));
Vue.component('parse', require('./components/Parse.vue'));
// Vue.component('login-form', require('./components/login-form.vue'));
// Vue.component('OAuth', require('./components/OAuth.vue'));
// Vue.component(
//     'passport-clients',
//     require('./components/passport/Clients.vue')
// );
//
// Vue.component(
//     'passport-authorized-clients',
//     require('./components/passport/AuthorizedClients.vue')
// );
//
// Vue.component(
//     'passport-personal-access-tokens',
//     require('./components/passport/PersonalAccessTokens.vue')
// );
const app = new Vue({
    el: '#app',
 	router
});

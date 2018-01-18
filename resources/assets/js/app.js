
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import App from './views/menu'
import ReactNative from './views/reactNative'
import Laravel from './views/laravel'
import Details from './views/details'


const router = new VueRouter({
    mode: 'history',
    routes: [

       {
           path: '/portfolio/laravel',
           name: 'laravel',
           component: Laravel
       },
       {
           path: '/portfolio/reactNative',
           name: 'reactNative',
           component: ReactNative,
       },

       {
           path: '/portfolio/details/:id',
           name: 'Deatail',
           component: Details,

       },
   ],
});

const app = new Vue({
  el: '#app',
 router,
 data:{
   msg: 'dfff',
 },



});

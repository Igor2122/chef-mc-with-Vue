
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);


import App from './components/App';
import About from './components/About';
import Home from './components/Home';
import UsersIndex from './components/UsersIndex';
import Product from './components/Products';
import Task from './components/Tasks';

const router = new VueRouter({
    mode: 'history',
    routes: [
      {
        path: '/',
        name: 'home',
        component: Home
      },
      {
        path: '/about',
        name: 'about',
        component: About,
      },
      {
        path: '/users',
        name: 'users.index',
        component: UsersIndex,
      },
      {
        path: '/products',
        name: 'product.index',
        component: Product,
      },
      {
        path: '/tasks',
        name: 'tasks.index',
        component: Task,
      },
    ],
});


const app = new Vue({
    el: '#app',
    data: {
        // items: [],
        message: 'Hi Vue!',
        hasError: true,
    },
    components: {
        // CategoriesComponent
        App
    },
    router,

});



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('homePage', require('./components/homePage.vue'));

import CategoriesComponent from './components/CategoriesComponent.vue';


const app = new Vue({
    el: '#app',
    data: {
        items: [],
        message: 'Hi Vue!',
        hasError: true,
    },
    components: {
        CategoriesComponent,
        homePage 
    },

    render: h => h(CategoriesComponent),

    mounted : function(){
        this.getVueItems();
    },
    created: function () {
        console.log('Значение message: ' + this.message);  // `this` указывает на экземпляр app
    },
    methods : {
        getVueItems: function(){
            axios.get('/vue/news').then((response) => {
                this.items = response.data;
            });
        },

    }
    */

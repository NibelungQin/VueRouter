/*
 |-------------------------------------------------------------------------------
 | routes.js
 |-------------------------------------------------------------------------------
 | Contains all of the routes for the application
 */

/**
 * Imports Vue and VueRouter to extend with the routes.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

/**
 * Extends Vue to use Vue Router
 */
Vue.use( VueRouter )

export default new VueRouter({
    routes: [
        {
            path:'/',
            name:'home',
            components:Vue.component('Home',require('./pages/Home.vue'))
        },
        {
            path:'/cafes',
            name:'cafes',
            components:Vue.component('Cafes',require('./pages/Cafes.vue'))
        },
        {
            path:'/cafes/new',
            name:'newcafe',
            components:Vue.component('NewCafe',require('./pages/NewCafe.vue'))
        },
        {
            path:'cafes/:id',
            name:'cafe',
            components:Vue.component('Cafe',require('./pages/Cafe.vue'))
        }
    ]
});
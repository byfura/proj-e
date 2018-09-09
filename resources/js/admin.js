/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

import FormPrivilege from './components/admin/FormPrivilege.vue'
import ViewPrivilege from './components/admin/ViewPrivilege.vue'
import SideBar from './components/admin/SideBar.vue'
import NavBar from './components/admin/NavBar.vue'

import './bootstrap'

Vue.use(VueRouter)

Vue.component('side-bar', SideBar);
Vue.component('nav-bar', NavBar);

const routes = [
  { path: '/input', component: FormPrivilege },
  { path: '/view', component: ViewPrivilege }
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

const app = new Vue({
  router
}).$mount('#app')
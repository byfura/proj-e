/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

import ViewPrivilege from './components/admin/ViewPrivilege.vue'
import ViewLanguage from './components/admin/ViewLanguage.vue'
import SideBar from './components/admin/SideBar.vue'
import NavBar from './components/admin/NavBar.vue'

import './bootstrap'

Vue.use(VueRouter)

Vue.component('side-bar', SideBar);
Vue.component('nav-bar', NavBar);

const routes = [
  { path: '/user', component: ViewPrivilege },
  { path: '/privilege', component: ViewPrivilege },
  { path: '/language', component: ViewLanguage },
  { path: '/currency', component: ViewPrivilege },
  { path: '/group', component: ViewPrivilege },
  { path: '/contract', component: ViewPrivilege },
  { path: '/contract-group', component: ViewPrivilege },
  { path: '/product-supplier', component: ViewPrivilege },
  { path: '/product-type', component: ViewPrivilege },
  { path: '/product-typevar', component: ViewPrivilege },
  { path: '/product-pricing', component: ViewPrivilege },
  { path: '/product-pricing-group', component: ViewPrivilege },
  { path: '/product-promotion-type', component: ViewPrivilege },
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

const app = new Vue({
  router
}).$mount('#app')
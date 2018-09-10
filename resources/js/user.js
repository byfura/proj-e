import Vue from 'vue'

import NavBar from './components/user/NavBar.vue'

import './bootstrap'

// Vue.component(NavBar);

const app = new Vue({
  components: {
    'nav-bar' : NavBar
  }
}).$mount('#app')
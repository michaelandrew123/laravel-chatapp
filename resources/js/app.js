require('./bootstrap');


// import Vue from 'vue'
// import App from './vue/app'

window.Vue = require('vue')

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import routes from './routes'
const router = new VueRouter({
    routes
})

import App from './App'

new Vue({
    router,
    render: h=>h(App)
}).$mount('#app');
require('./bootstrap');

window.Vue = require('vue');

//vue Router
import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//Debug tool
Vue.config.devtools = true;

//Components
import Home from './components/Pages/Home.vue'
import Resume from './components/Pages/Resume.vue'
import Portfolio from './components/Pages/Portfolio.vue'
import AllExperiences from './components/Sections/Experience/AllExperiences.vue'



const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Router
const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/resume',
            name: 'Resume',
            component: Resume
        },
        {
            path: '/experiences',
            name: 'Experience',
            component: AllExperiences
        },
        {
            path: '/portfolio',
            name: 'Portfolio',
            component: Portfolio
        },
        { path: '*', redirect: '/' }
    ]
});

const app = new Vue({
    el: '#app',
    router,
});

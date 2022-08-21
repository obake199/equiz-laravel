import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Page Files
import Login from './../layouts/login.vue';
import Register from './../layouts/register.vue';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',

    scrollBehavior(to, from, savedPosition) {
        return window.scrollTo({ top: 0, behavior: 'smooth' });
    },

    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        }
    ]
})

export default router;
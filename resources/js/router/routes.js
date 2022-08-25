import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Page Files
import Login from './../layouts/login.vue';
import Register from './../layouts/register.vue';
import Dashboard from './../layouts/admin/dashboard.vue';

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
            props: true,
            component: () => import('./../layouts/login.vue'),
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/admin/dashboard',
            name: 'admin-dashboard',
            component: Dashboard,
        },
    ]
})

export default router;
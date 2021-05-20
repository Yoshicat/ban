require('./bootstrap');

import Vue from 'vue';
import {BootstrapVue} from 'bootstrap-vue';
import VueRouter from 'vue-router';
import App from './components/App';
import routes from './routes';

Vue.use(VueRouter);
Vue.use(BootstrapVue);

function loggedIn() {
    return localStorage.getItem('token')
}

const token = localStorage.getItem('token');

if (token) {
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
}

const router = new VueRouter(routes);

router.beforeEach((to, from, next) => {

    if (to.matched.some(record => record.meta.requiresAuth)) {

        if (!loggedIn()) {
            next({
                path: '/login'
            })
        } else {
            next();
        }

    } else if (to.matched.some(record => record.meta.guest)) {

        if (loggedIn()) {
            next({
                path: '/'
            })
        } else {
            next();
        }

    } else {

        next();

    }

});

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});


import Welcome from './components/Welcome';

const Login = () => import (/* webpackChunkName: "auth" */ './components/Auth/Login');
const Register = () => import (/* webpackChunkName: "auth" */ './components/Auth/Register');

const Records = () => import (/* webpackChunkName: "records" */ './components/Records/Records');

const Servers = () => import (/* webpackChunkName: "data" */ './components/Servers/Servers');
const Rules = () => import (/* webpackChunkName: "data" */ './components/Rules/Rules');
const Users = () => import (/* webpackChunkName: "data" */ './components/Users/Users');


export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Welcome,
            name: 'Welcome',
            meta: {requiresAuth: true}
        },
        {
            path: '/login',
            component: Login,
            name: 'login',
            meta: {guest: true}
        },
        {
            path: '/register',
            component: Register,
            name: 'register',
            meta: {guest: true}

        },
        {
            path: '/records',
            component: Records,
            name: 'records',
            meta: {requiresAuth: true}
        },
        {
            path: '/servers',
            component: Servers,
            name: 'servers',
            meta: {requiresAuth: true}
        },
        {
            path: '/rules',
            component: Rules,
            name: 'rules',
            meta: {requiresAuth: true}
        },
        {
            path: '/users',
            component: Users,
            name: 'users',
            meta: {requiresAuth: true}
        },
    ]
}


import './bootstrap';
import { createApp } from 'vue';
import * as VueRouter from 'vue-router';
import Index from "./components/Index.vue";



const routes = [
    {
        path: '/people',
        component: () => import('./components/Person/Index.vue'),
        name: 'person.index'
    },
    {
        path: '/create',
        component: () => import('./components/Person/Create.vue'),
        name: 'person.create'
    },

]

const routers  = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/'),
    routes
})


const app = createApp({});

app.use(routers)

app.component('index', Index);
app.mount('#app');

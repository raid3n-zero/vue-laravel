import { createWebHistory, createRouter } from 'vue-router';
import home from './pages/Home.vue';

const routes = [
    {

        path: '/',
        name: 'Home',
        component: home,
        meta: {
            title: 'File Manager'
        }

    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
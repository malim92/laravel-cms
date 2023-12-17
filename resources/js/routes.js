import Dashboard from './components/Dashboard.vue';
import HomePage from './components/HomePage.vue';
import AboutUs from './components/AboutUs.vue';
import Posts from './components/Posts.vue';

export default [
    {
        path: '/admin/dashboard',
        name: 'admin.dashboard',
        component: Dashboard,
    },
    {
        path: '/admin/home',
        name: 'admin.home',
        component: HomePage,
    },
    {
        path: '/admin/posts',
        name: 'admin.posts',
        component: Posts,
    }
]
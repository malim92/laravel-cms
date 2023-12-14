import Dashboard from './components/Dashboard.vue';
import HomePage from './pages/Home/HomePage.vue';

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
    }
    // {
    //     path: 'admin/about',
    //     name: 'admin.about',
    //     component: AboutUs,
    // }
]
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import 'admin-lte/plugins/jquery/jquery.min.js';
import './bootstrap';
import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js';
import 'admin-lte/dist/js/adminlte.min.js?v=3.2.0';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import Routes from './routes.js';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

const router = createRouter({
    routes: Routes,
    history: createWebHistory(),
});

app.use(router);

app.mount('#app');


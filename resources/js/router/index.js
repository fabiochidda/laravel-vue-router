import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import Posts from '../pages/Post.index.vue'
import Post from '../pages/Post.show.vue'

const routes = [
    {
        path: '/posts',
        name: 'post.index',
        component: Posts,
    },
    {
        path: '/posts/:slug',
        name: 'post.show',
        component: Post,
    },
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

export default router
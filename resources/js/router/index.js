import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../views/Login.vue'
import Chat from '../views/Chat.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    base: process.env.BASE_URL,
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/chat',
            name: 'chat',
            component: Chat
        }
    ]
})

export default router

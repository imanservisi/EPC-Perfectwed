import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/board',
    name: 'board',
    component: () => import('../views/Board.vue')
  },
  {
    path: '/step1',
    name: 'step1',
    component: () => import('../views/step1.vue')
  },
  {
    path: '/step2',
    name: 'step2',
    component: () => import('../views/step2.vue')
  },
  {
    path: '/step3',
    name: 'step3',
    component: () => import('../views/step3.vue')
  },
  {
    path: '/step4',
    name: 'step4',
    component: () => import('../views/step4.vue')
  },
  {
    path: '/step5',
    name: 'step5',
    component: () => import('../views/step5.vue')
  },
  {
    path: '/step6',
    name: 'step6',
    component: () => import('../views/step6.vue')
  },
  {
    path: '/step7',
    name: 'step7',
    component: () => import('../views/step7.vue')
  },
  {
    path: '/step8',
    name: 'step8',
    component: () => import('../views/step8.vue')
  },
  {
    path: '/step9',
    name: 'step9',
    component: () => import('../views/step9.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router

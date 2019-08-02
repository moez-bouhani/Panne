import VueRouter from 'vue-router'
// Pages

import Home from './pages/Home'
import Register from './pages/Register'
import Login from './pages/Login'

import Dashboard from './pages/user/Dashboard'
import AdminDashboard from './pages/admin/Dashboard'


import Contact from './components/Contact.vue'


// Routes
const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: {
      auth: undefined
    }
  },


  
  {
    path: '/REGISTER',
    name: 'REGISTER',
    component: Register,
    meta: {
      auth: false
    }
  },
  {
    path: '/LOGIN',
    name: 'LOGIN',
    component: Login,
    meta: {
      auth: false
    }
  },
  // USER ROUTES
  {
    path: '/dashboard',
    name: 'dashboard',
    component: Dashboard,
    meta: {
      auth: true
    }
  },
  // ADMIN ROUTES
  {
    path: '/admin',
    name: 'admin.dashboard',
    component: AdminDashboard,
    meta: {
      auth: {roles: 1, redirect: {name: 'LOGIN'}, forbiddenRedirect: '/403'}
    }
  },

  // route liste contact et ajouter contact
  
  
  
  
]

const router = new VueRouter({
  history: true,
  mode: 'history',
  routes,
})

export default router
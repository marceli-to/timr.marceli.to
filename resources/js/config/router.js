import { createRouter, createWebHistory } from 'vue-router';
import TimerView from '@/views/timer/Index.vue';
import ProjectView from '@/views/project/Index.vue';
import ClientView from '@/views/client/Index.vue';
import InvoiceView from '@/views/invoice/Index.vue';
import ExpenseView from '@/views/expense/Index.vue';

const router = createRouter({
  history: createWebHistory(),
  linkActiveClass: 'is-active',
  routes: [
    {
      path: '/',
      name: 'timer',
      component: TimerView,
      meta: { requiresAuth: true },
    },
    {
      path: '/projects',
      name: 'projects',
      component: ProjectView,
      meta: { requiresAuth: true },
    },
    {
      path: '/clients',
      name: 'clients',
      component: ClientView,
      meta: { requiresAuth: true },
    },
    {
      path: '/invoices',
      name: 'invoices',
      component: InvoiceView,
      meta: { requiresAuth: true },
    },
    {
      path: '/expenses',
      name: 'expenses',
      component: ExpenseView,
      meta: { requiresAuth: true },
    }
  ]
});

export default router;

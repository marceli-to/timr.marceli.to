<template>
  <div class="flex h-screen">
    <nav class="bg-white border-r border-gray-100 w-48 p-4 pt-6 flex flex-col justify-between items-start group">
      <div class="w-full">
        <logo class="w-32 h-auto block" />
        <div class="mt-8 mb-2 font-mono text-xs text-gray-300 uppercase tracking-widest">Track</div>
        <ul class="mb-6 block w-full">
          <li class="block w-full">
            <a href="" title="Timer" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
              <clock />
              <div class="ml-2">Timer</div>
            </a>
          </li>
        </ul>
        <div class="mt-6 mb-2 font-mono text-xs text-gray-300 uppercase tracking-widest">Manage</div>
        <ul class="mb-6 space-y-2 block w-full">
          <li class="block w-full">
            <a href="" title="Projects" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
              <folder />
              <div class="ml-2">Projects</div>
            </a>
          </li>
          <li class="block w-full">
            <a href="" title="Projects" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
              <user-group />
              <div class="ml-2">Clients</div>
            </a>
          </li>
        </ul>
        <div class="mt-6 mb-2 font-mono text-xs text-gray-300 uppercase tracking-widest">Backoffice</div>
        <ul class="mb-6 space-y-2 block w-full">
          <li class="block w-full">
            <a href="" title="Projects" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
              <document />
              <div class="ml-2">Invoices</div>
            </a>
          </li>
          <li class="block w-full">
            <a href="" title="Projects" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
              <receipt />
              <div class="ml-2">Expenses</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="w-full">
        <form action="logout" method="POST" class="block w-full">
          <a href="" @click.prevent="logout()"  title="Logout" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
            <logout />
            <div class="ml-2">Logout</div>
          </a>
        </form>
      </div>
    </nav>
    <div class="bg-gray-50 flex-1">
      <header class="h-12 p-6">
        <div class="w-full max-w-5xl flex justify-start relative">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
            <magnifier />
          </div>  
          <input type="text" placeholder="Search..." class="w-full max-w-sm border border-gray-100 rounded px-3 py-3 pl-10 font-mono text-xs text-gray-800 placeholder:font-mono placeholder:font-light placeholder:text-xs placeholder:text-gray-400 focus:border-primary-500 focus:ring-primary-400" />
        </div>
      </header>
      <main class="px-6 py-12">
        <div class="w-full max-w-5xl rounded border border-gray-100 bg-white">
          <table class="w-full rounded">
            <thead class="text-sm border-b border-gray-100">
              <th class="text-left text-gray-300 text-xs uppercase font-mono tracking-widest p-4">Name</th>
              <th class="text-left text-gray-300 text-xs uppercase font-mono tracking-widest p-4">Ort</th>
              <th class="text-left text-gray-300 text-xs uppercase font-mono tracking-widest p-4">Status</th>
              <th class="text-left text-gray-300 text-xs uppercase font-mono tracking-widest p-4">&nbsp;</th>
            </thead>
            <tbody class="text-sm">
              <tr class="border-b border-gray-100 group">
                <td class="bg-white group-hover:bg-gray-50 p-4">Agentur für Kommunikation</td>
                <td class="bg-white group-hover:bg-gray-50 p-4">Zürich</td>
                <td class="bg-white group-hover:bg-gray-50 p-4">
                  <div class="bg-yellow-200 text-yellow-600 text-xs rounded-full px-3 py-1 font-mono inline-flex w-auto">Inaktiv</div>
                </td>
                <td class="text-right bg-white group-hover:bg-gray-50 p-4">
                  <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
                </td>
              </tr>
              <tr class="group">
                <td class="bg-white group-hover:bg-gray-50 p-4">AhornGarten</td>
                <td class="bg-white group-hover:bg-gray-50 p-4">Russikon</td>
                <td class="bg-white group-hover:bg-gray-50 p-4">
                  <div class="bg-green-200 text-green-600 text-xs rounded-full px-3 py-1 font-mono inline-flex w-auto">Aktiv</div>
                </td>
                <td class="text-right bg-white group-hover:bg-gray-50 p-4">
                  <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
                </td>
              </tr>
            </tbody>

          </table>
        </div>

      </main>
    </div>
  </div>
</template>
<script>
import NProgress from 'nprogress';
import Logo from "@/components/icons/Logo.vue";
import Logout from "@/components/icons/Logout.vue";
import Clock from "@/components/icons/Clock.vue";
import Folder from "@/components/icons/Folder.vue";
import UserGroup from "@/components/icons/UserGroup.vue";
import Receipt from "@/components/icons/Receipt.vue";
import Document from "@/components/icons/Document.vue";
import Magnifier from "@/components/icons/Magnifier.vue";

export default {

  components: {
    Logo,
    Logout,
    Clock,
    Folder,
    UserGroup,
    Receipt,
    Document,
    Magnifier,
  },

  data() {
    return {
      routes: {
        base: '/',
        logout: '/logout',
      },
    };
  },

  methods: {
    logout() {
      NProgress.start();
      this.axios.post(this.routes.logout).then(response => {
        NProgress.done();
        document.location.href = this.routes.base;
      });
    }
  }
}
</script>
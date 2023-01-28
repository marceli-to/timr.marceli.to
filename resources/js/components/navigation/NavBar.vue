<template>
  <nav class="bg-white border-r-2 border-primary-200/50 w-auto p-4 pr-6 pt-6 flex flex-col justify-between items-start group">
    <nav-section>
      <logo class="w-32 h-auto block mb-8" />
      <template v-for="group in navigation">
        <nav-header :title="group.header" />
        <nav-item-group>
          <li 
            v-for="(item, itemIndex) in group.items" 
            :key="itemIndex"
            class="block w-full">
            <router-link 
              :to="{ name: item.route }" 
              :title="item.label"
              class="font-sans text-sm font-semi">
              <component :is="item.icon" />
              <div class="ml-2">{{ item.label }}</div>
            </router-link>
          </li>
        </nav-item-group>
      </template>
    </nav-section>
    <nav-section>
      <form action="logout" method="POST" class="block w-full">
        <a href="" @click.prevent="logout()"  title="Logout" class="inline-flex items-center w-auto p-3 pr-4 -ml-2 text-gray-900 hover:bg-gray-50 rounded-full font-sans text-sm font-semi hover:text-primary-600">
          <logout />
          <div class="ml-2">Logout</div>
        </a>
      </form>
    </nav-section>
  </nav>
</template>
<script>
import Logo from "@/components/icons/Logo.vue";
import Logout from "@/components/icons/Logout.vue";
import Clock from "@/components/icons/Clock.vue";
import Folder from "@/components/icons/Folder.vue";
import UserGroup from "@/components/icons/UserGroup.vue";
import Receipt from "@/components/icons/Receipt.vue";
import Document from "@/components/icons/Document.vue";
import NavSection from "@/components/navigation/NavSection.vue";
import NavHeader from "@/components/navigation/NavHeader.vue";
import NavItemGroup from "@/components/navigation/NavItemGroup.vue";
import navigation from '@/config/navigation';
import { useUserStore } from '@/stores/user';

export default {

  components: {
    Logo,
    Logout,
    Clock,
    Folder,
    UserGroup,
    Receipt,
    Document,
    NavSection,
    NavHeader,
    NavItemGroup
  },

  data() {
    return {
      user: useUserStore(),
      navigation: navigation.data,
      routes: {
        base: '/',
        logout: '/logout',
      },
    };
  },

  mounted() {
    this.getUser();
  },

  methods: {

    getUser() {
      if (!this.user.name) {
        this.axios.get(`/api/user`).then(response => {
          const store = useUserStore();
          store.name = response.data.name;
          store.email = response.data.email;
        });
      }
    },

    logout() {
      this.axios.post(this.routes.logout).then(response => {
        document.location.href = this.routes.base;
      });
    }
  }
}
</script>
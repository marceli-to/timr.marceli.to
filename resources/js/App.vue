<template>
  <div class="flex h-screen">
    <nav-bar />
    <router-view />
  </div>
</template>
<script>
import NavBar from "@/components/navigation/NavBar.vue";

export default {
  components: {
    NavBar
  },
}
</script>
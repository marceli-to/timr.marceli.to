<template>
  <div class="max-w-sm relative">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-primary-500 z-20">
      <magnifier v-if="!keyword" />
      <a href="" @click.prevent="reset()" v-else>
        <cross />
      </a>
    </div>
    <form @submit.prevent="search(keyword)">
      <input 
        v-model="keyword"
        @blur="search(keyword)"
        type="text" 
        placeholder="Search..." 
        class="w-48 border-transparent shadow-inner shadow shadow-primary-200 focus:shadow-md focus:shadow-primary-200 rounded-lg px-3 py-3 pl-10 font-sans text-sm text-gray-900 placeholder:font-sans placeholder:text-sm placeholder:text-primary-500  focus:border-transparent focus:ring-0" />
    </form>
  </div>
</template>
<script setup>
import { ref } from 'vue';
import Magnifier from "@/components/icons/Magnifier.vue";
import Cross from "@/components/icons/Cross.vue";

const emit = defineEmits(['change', 'reset'])
const keyword = ref('');

const reset = () => {
  keyword.value = '';
  emit('reset');
}

const search = (keyword) => {
  if (keyword.length > 2) {
    emit('change', keyword);
  }
}
</script>
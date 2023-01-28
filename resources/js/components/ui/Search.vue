<template>
  <div class="max-w-sm relative">
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-primary-500">
      <magnifier />
    </div>  
    <input type="text" placeholder="Search..." class="w-48 border-transparent shadow-inner shadow shadow-primary-200 focus:shadow-md focus:shadow-primary-200 rounded-lg px-3 py-3 pl-10 font-sans text-sm text-gray-900 placeholder:font-sans placeholder:text-sm placeholder:text-primary-500  focus:border-transparent focus:ring-0" />
  </div>
</template>
<script>
import Magnifier from "@/components/icons/Magnifier.vue";
export default {

  components: {
    Magnifier
  }
  
}
</script>
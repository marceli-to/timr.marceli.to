<template>
  <button :class="[$slots.icon ? 'pl-10' : '', 'bg-white block shadow-inner shadow shadow-primary-200 hover:shadow-md hover:shadow-primary-200 rounded-lg px-4 py-3 text-primary-500 text-sm relative']">
    <div v-if="$slots.icon"
      class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-primary-500">
      <slot name="icon" />
    </div>
    <span class="block">{{ $props.label }}</span>
  </button>
</template>
<script>
export default {
  props: {
    label: {
      type: String,
      default: ''
    }
  }
}
</script>
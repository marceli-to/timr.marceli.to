// stores/user.js
import { defineStore } from 'pinia';
export const useLoadingStore = defineStore('loading', {
  state: () => ({ loaded: false }),
});
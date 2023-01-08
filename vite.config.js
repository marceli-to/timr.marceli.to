// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    vue(),
    laravel([
      'resources/js/app.js',
    ]),
  ],
  // build: {
  //   outDir: 'public'
  // }

});
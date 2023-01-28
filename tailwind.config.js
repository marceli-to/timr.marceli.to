/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      
      colors: {
        'primary': {
          '50': '#f3f1ff',
          '100': '#ebe5ff',
          '200': '#d9ceff',
          '300': '#bea6ff',
          '400': '#9f75ff',
          '500': '#843dff',
          '600': '#7916ff',
          '700': '#6b04fd',
          '800': '#5a03d5',
          '900': '#4b05ad',
        },
      },

      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
        mono: ['IBM Plex Mono', ...defaultTheme.fontFamily.mono],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pink': '#f542b3',
        'pinkmuda': '#c21f8e'
    },
    },
  },
  plugins: [],
}
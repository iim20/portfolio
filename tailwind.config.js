/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'white': '#ffffff',
        'redPrimary': '#FF0274',
        'greenPrimary': '#12B54A',
        'bluePrimary': '#0098F1',
      },
    },
  },
  plugins: [],
}

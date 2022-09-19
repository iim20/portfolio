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
        'redBtn': '#b92b27',
        'blueBtn': '#1565C0',
      },
    },
  },
  plugins: [],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {

    extend: {
      colors :{
      'blackOpacity':"rgba(0,0,0,.5)",
      'swapBg': 'rgba(52, 68, 76, .7)',
      'sidebar':'#0007',
      'gradient-to-b':'linear-gradient(to right, black, gray)'
    }
    },
   
  },
  plugins: [],
}

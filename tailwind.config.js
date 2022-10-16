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
      'blackOpacity':"rgba(0,0,0,.5)"
    }
    },
   
  },
  plugins: [],
}

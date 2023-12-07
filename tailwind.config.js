/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "jost": ['Jost', 'sans-serif'],
        "roboto" : ['Roboto Condensed', 'sans-serif']
      },

      backgroundColor: {
        "sigrax-red": "#F08080",
        "sigrax-yellow": "#ebc364"
      },

      colors: {
        "sigrax-red": "#F08080",
        "sigrax-yellow": "#ebc364"
      }
    },
  },
  plugins: [],
}


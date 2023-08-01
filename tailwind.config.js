/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/views/categories/**/*.blade.php",
  ],
  theme: {
    extend: {

      spacing: {
        "big":"38rem",
        "reg":"34rem",
      }
    },
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
    },
    fontFamily:{
      nunito: ['Nunito', 'sans-serif']
    } 
  },
  plugins: [],
}


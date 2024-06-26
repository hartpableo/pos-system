/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./static/**/*.html",
    "./js/**/*.js",
    "./header.php",
    "./footer.php",
    "./views/**/*.php",
    "./templates/**/*.php",
  ],
  theme: {
    fontFamily: {
      primary: ["Nunito", "sans-serif"],
    },
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes: false
  },
}


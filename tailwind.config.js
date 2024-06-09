/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./static/**/*.html",
    "./js/**/*.js",
    "./header.php",
    "./footer.php",
    "./views/**/*.php",
  ],
  theme: {
    fontFamily: {
      primary: ["Nunito", "sans-serif"],
    },
    extend: {},
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['JetBrains Mono', 'sans-serif']
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}
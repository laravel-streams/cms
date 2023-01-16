/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  purge: {
    enabled: false,
    content: [
      './storage/framework/views/*.php',
      './streams/data/pages/*.html',
      './resources/**/*.blade.php',
      './docs/*.md',
    ],
    options: {
      whitelist: [],
    }
  },
  theme: {
    extend: {},
  },
  plugins: [],
}

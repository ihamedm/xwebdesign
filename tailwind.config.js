/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './assets/css/*.css',
    './assets/css/*.scss',
    './assets/js/*.js',
  ],
  safelist: [
    ''
  ],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      },
    },
    extend: {
      colors:{
        transparent: 'transparent',
        text: '#212121',
        link: '#18b7cd',
        primary: {
          100: '#fbebf0',
          200: '#f3c1d0',
          300: '#eda3ba',
          400: '#e47a9a',
          500: '#df6086',
          DEFAULT: '#d73868',
          700: '#c4335f',
          800: '#99284a',
          900: '#761f39',
        },
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')({
      strategy: 'class', // only generate global styles
    }),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
}


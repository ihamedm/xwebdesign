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
        DEFAULT: '0',
        md: '1rem',
        sm: '1rem',
        lg: '1rem',
        xl: '1rem',
        '2xl': '1rem',
      },
    },
    extend: {
      colors:{
        transparent: 'transparent',
        text: '#212121',
        link: {
          DEFAULT : '#0069c2',
          'hover' : '#00518f',
          'visited' : '#6900ff'
        },
        primary: {
          50 : '#eaf3fa',
          100: '#bed8ee',
          200: '#9ec6e6',
          300: '#72abdb',
          400: '#569bd4',
          500: '#2c82c9',
          DEFAULT: '#2876b7',
          700: '#1f5c8f',
          800: '#18486f',
          900: '#123754',
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


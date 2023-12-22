/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.{html,php}',
    './assets/templates/*.{html,php}',
    './assets/js/*.{html,js}',
  ],
  theme: {
    extend: {
      maxWidth: {
        'screen-2xl': '1600px',
        'screen-xl': '1180px',
      },
      backgroundImage: {
        'header': "url('/assets/images/background-top.png')",
      },
      colors: {
        darkblue: '#172755',
        secondary: '#8794BA',
        main: '#172755',
        red: '#EF2A82',
        white:'#FFFFFF',
        background: '#F8F9FF',
        azuloscuro: '#0F1F4B',
        borde: '#2A407C',

      },
      borderRadius:{
        '4xl': '5rem',
      }
    },
    theme: {
      fontFamily: {
        'roboto': ['Roboto', 'Arial', 'sans-serif'],
      },
      container: {
        center: true,
      },
    }
  },
  plugins: [
   
  ],
}


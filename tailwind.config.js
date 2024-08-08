/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],  theme: {
    extend: {
      backgroundImage: {
        'bg-header': "url('/img/bg-10.jpg')",
        'headershape': "url('/img/header-shape.png')",
        'slider1': "url('/img/slider-28.jpg')",
        'slider2': "url('/img/slider-29.jpg')",
        'slider3': "url('/img/slider-27.jpg')",
        'pattern': "url('/img/pattern2.png')",
        'footerbg': "url('/img/bg-12.jpg')",

        'custom-gradient': 'linear-gradient(#fff, #fff)',


      },
      
      maxWidth: {
        '1/3': '33.333333%',
      },
      flex: {
        '1/3': '0 0 33.333333%',
      },
      padding : {
        '3.75': '15px',
        '2.5': '10px',
        '4.25': '17px',
      },
      backgroundColor: {
        'pattern': 'rgba(0, 0, 0, 0.5)',
      },
      minHeight: {
        '1': '1px',
      },
      
      borderWidth: {
        '1': '1px',
        '70': '70px',

      },
     
      float: {
        'left': 'left',
      },
      backfaceVisibility: {
        'hidden': 'hidden',
      },
      touchCallout: {
        'none': 'none',
      },
      width: {
        'custom': '14952px',
      },
      screens: {
        '2xl': '1501px', 
      },
      transform: {
        'custom': 'translate3d(-4272px, 0px, 0px)',
      },
      transitionProperty: {
        'all': 'all',
      },
      flex : {
        '0-0-50': '0 0 50%',
        '0-0-100': '0 0 100%',
        '0-0-25': '0 0 25%',
        '0-0-75': '0 0 75%',
        '0-0-180': '0 0 180px',
        '0-0-41': '0 0 41.66666%',
        '0-0-16': '0 0 16.66666%',
        '0-0-33': '0 0 33.33333%',
        '0-0-66': '0 0 66.66666%',






      },
      borderWidth: {
        '10': '10px',
      },
      colors: {
        'custom-border': '#e6e6e6',

        'custom-white': '#fff',
      },
      translate: {
        'custom-x': '-4272px',
      },
      width: {
        'custom': '14952px',
      },
      transitionProperty: {
        'all': 'all',
      },
      borderWidth: {
        'top-70': '70px',
      },
      borderColor: {
        'white': '#fff',
        'transparent': 'transparent',
      },
      spacing: {
        '120': '120px',
      },
      borderWidth: {
        'medium': '3px', 
      },
      backgroundColor: {
        'white-10': 'rgba(255, 255, 255, 0.1)',
      },
      padding: {
        'custom': '15px 10px 17px',
      },
      translate: {
        '-1/2': '-50%',
      },
      colors: {
        graytext: '#999',
      },
    },
  },
  plugins: [
  
    function ({ addUtilities }) {
      addUtilities({
        '.backface-hidden': {
          '-webkit-backface-visibility': 'hidden',
        },
        '.touch-callout-none': {
          '-webkit-touch-callout': 'none',
        },
        '.transform-custom': {
          transform: 'translate3d(-4272px, 0px, 0px)',
        },
        '.transition-all-custom': {
          transition: 'all',
        },
        '.w-custom': {
          width: '14952px',
        },
      '.backface-hidden': {
        '-webkit-backface-visibility': 'hidden',
      },
      '.touch-callout-none': {
        '-webkit-touch-callout': 'none',
      },
      '.transform-custom': {
        transform: 'translate3d(-4272px, 0px, 0px)',
      },
      '.transition-all-custom': {
        transition: 'all',
      },
    })
  }],
}


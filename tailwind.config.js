/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        keyframes: {
          zoomIn: {
            '0%': {
              transform: 'scale(0.8)',
              opacity: '0',
            },
            '100%': {
              transform: 'scale(1)',
              opacity: '1',
            },
          },
          slideInUp: {
            '0%': {
              transform: 'translateY(50px)',
              opacity: '0',
            },
            '100%': {
              transform: 'translateY(0)',
              opacity: '1',
            },
          },
          fadeIn: {
            '0%': {
              opacity: '0',
            },
            '100%': {
              opacity: '1',
            },
          },
          heroBackground: {
            '0%': {
              backgroundPosition: 'left',
            },
            '100%': {
              backgroundPosition: 'right',
            },
          },
        },
        animation: {
          zoomIn: 'zoomIn 1.5s ease-out',
          slideInUp: 'slideInUp 1.5s ease-out',
          fadeIn: 'fadeIn 2s ease-in',
          heroBackground: 'heroBackground 5s linear infinite alternate',
        },
      },
    },
    plugins: [],
};

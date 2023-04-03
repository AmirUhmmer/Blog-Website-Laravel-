/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
      screens: {
        sm: '390px',
        tb: '760px',
        tbl:  '900px',
        lt:  '1250px',
        md: '1700px',
        xl: '1440px',
      },
      fontFamily: {
        'sans': ['Poppins', 'sans-serif'],
      },
        extend: {
            colors: {
                brown: '#250902',
                verydark_red: '#38040E',
                dark_red: '#640D14',
                red: '#800E13',
                pink_red: '#AD2831',
                light_blue: '#80FFDB',
                whish: '#F1FAEE',
                card_white: '#f6f6f6',
                main_dark: '#141414',
                card_dark: '#202020'
            },
        },
    },
  plugins: [
    require('tailwind-scrollbar'),
  ],
  
}

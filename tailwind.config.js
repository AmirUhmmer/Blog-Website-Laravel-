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
        sm: '300px',
        tb:  '760px',
        md: '768px',
        lg: '976px',
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
  plugins: [],
}

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  
  theme: {
    extend: {
      colors: {
        body_color: '#1E1B34',
        secondary_color: '#0D0D0D',
        font_color: '#E0E0FF',
        navbar_color: '#232946',
        accent1_color: '#3B3C50',
        accent2_color: '#42C8F4',
      },
      fontFamily: {
        sourGummy: ['"Sour Gummy"', 'sans-serif'],
        nunito: ['Nunito', 'sans-serif'],
      },
    },
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./templates/**/*.php",
    "./scripts/**/*.js",
    "./data/**/*.json"
  ],
  theme: {
    extend: {
      fontFamily: { 
        'manrope': ['Manrope', 'sans-serif'], 
        'inter': ['Inter', 'sans-serif'] 
      },
      colors: { 
        'primary': '#031636', 
        'primary-container': '#1A2B4C', 
        'secondary-container': '#FDC003',
        'surface-container-low': '#F3F4F6',
        'surface-dim': '#DADADA'
      }
    },
  },
  plugins: [],
}
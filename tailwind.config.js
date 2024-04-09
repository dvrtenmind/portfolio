module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        'standard': ['standard'],
      },
      colors: {
        'green_dvr' : '#0F9048',
        'purple_dvr' : '#3738C7',
        'purple_bg' : '#46469C'
      }
    },
  },
  plugins: [require("./plugin")],
}

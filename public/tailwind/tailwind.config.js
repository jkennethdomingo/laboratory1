/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    '../../app/Views/**/*.{php,html,js}',
  ],
  theme: {
    extend: {
      colors: {
        'login-main-bg': '#5865f2',
        'main-bg': '#1e1f22',
        'main-cont': '#f7f5fd',
        'txt': '#f0f3f5',
        'sub-header': '#a8adb4',
        'label': '#b5bac1',
        'error': '#e13f40',
        'input-success': '#09c372',
        'input-error': '#ff3860',
        'link': '#02a4f6',
        'button': '#4752c4',
        'txtbx': '#1e1f22',
        'req': '#f03f42',
        'white-bg': '#f5f5f7',
        'white-txt': '#1d1d1f',
        'white-btn': '#3d44c3',
        'white-cont': '#e9e9e9',
        'white-input': '#f6f6f8',
        'white-tbl': '#d0d0d4',
      },
      backgroundImage: {
          'login-bg': "url(/assets/web-images/login-bg.png)",
      },
      fontFamily: {
          Notosans: ['Noto Sans', 'sans-serif'],
          custom: ['gg sans Medium', 'sans-serif'],
          customsb: ['gg sans SemiBold', 'sans-serif'],
      },
      borderRadius: {
          'ave': '.25rem',
      },
      fontSize: {
          'xxs': '0.6rem',
      },
      spacing: {
          '128': '32rem',
          '256': '50rem',
      },

    },
  },
  plugins: [],
}


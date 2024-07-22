/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        colors: {
            'primary-dark-green': '#126466',
            'secondary-light-green': '#DBEFEA',
            'accent-light-orange': '#FFCB9A',
            'white': '#FFFFFF',
            'light-grey': '#EAEAEA',
            'medium-grey': '#5A5F60',
            'dark': '#2C3532',
        },
    },
  },
  plugins: [],
}


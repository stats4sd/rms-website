const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            height: {
                "10v": "10vh",
                "20v": "20vh",
                "30v": "30vh",
                "40v": "40vh",
                "50v": "50vh",
                "55v": "55vh",
                "60v": "60vh",
                "70v": "70vh",
                "80v": "80vh",
                "90v": "90vh",
                "100v": "100vh",
                
            },
            colors: {
                primary: {
                    light: '#F0A4A7',
                    DEFAULT: '#d32329',
                    dark: '#9E191F',

                    300: '#F0A4A7',
                    500: '#d32329',
                    600: '#d32329',
                    700: '#d32329',
                    900: '#9E191F',
                },
                success: colors.green,
                warning: colors.yellow,
                danger: colors.red,
            }

        },

    },
    plugins: [
        require('daisyui'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
    },
}

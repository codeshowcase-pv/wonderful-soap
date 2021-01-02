const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
            chudo: {
                100: '#FCDEC8',
                200: '#F2CAAC',
                300: '#A52115',
                400: '#591711',

            }
        },
        extend: {},
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
            text: ['active']
        },
    },
    plugins: [],
}

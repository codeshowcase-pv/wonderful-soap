module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
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
        extend: {},
    },
    plugins: [],
}

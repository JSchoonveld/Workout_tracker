const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Red Hat Display', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'classy-dark': '#1D1D20 ',
                'primary': '#4FD1C5',
            },
            container: {
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

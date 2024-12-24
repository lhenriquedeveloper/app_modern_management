/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                background: '#3d3d3d',
                primary: {
                    light: '#6D28D9',
                    DEFAULT: '#5B21B6',
                    dark: '#4C1D95',
                },
                secondary: {
                    light: '#FBBF24',
                    DEFAULT: '#F59E0B',
                    dark: '#B45309',
                },
                accent: {
                    light: '#34D399',
                    DEFAULT: '#10B981',
                    dark: '#059669',
                },
            },
        },
    },
    plugins: [],
}

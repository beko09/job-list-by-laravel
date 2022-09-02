/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        fontFamily: {
            'samsungs': ['samsungs', 'sans-serif'],
        },
        extend: {
            colors: {
                laravel: "#000000",
            },
        },
    },
    plugins: [],
}

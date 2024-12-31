/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true
        },
        extend: {
            fontFamily: {
                sans: ["Figtree"],
            },
        },
    },
    plugins: [require('flowbite/plugin')],
};

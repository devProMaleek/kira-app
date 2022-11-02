const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#ffebcc",
                    100: "#ffe0b3",
                    200: "#ffd699",
                    300: "#ffcc80",
                    400: "#ffc266",
                    500: "#ffb84d",
                    600: "#ffad33",
                    700: "#ffa31a",
                    800: "#ff9900",
                    900: "#e68a00",
                },
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("flowbite/plugin"), require("flowbite-typography")],
};

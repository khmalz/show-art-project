import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import flowbite from "flowbite/plugin";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: "#E3EEE3",
                    200: "#C8DDC8",
                    300: "#ADCCAD",
                    400: "#92BC92",
                    500: "#79AC78",
                    600: "#599058",
                    700: "#426C42",
                    800: "#2C482C",
                    900: "#162416",
                },
                secondary: "#EEE7DA",
                third: "#B0D9B1",
                fourth: "#F2F1EB",
            },
        },
    },

    plugins: [forms, flowbite],
};

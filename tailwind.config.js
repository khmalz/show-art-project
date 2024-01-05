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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    300: "#9fbba4",
                    400: "#93b399",
                    500: "#88AB8E",
                    600: "#7a997f",
                    700: "#6c8871",
                    800: "#5f7763",
                    900: "#516655",
                },
                secondary: "#EEE7DA",
                third: "#AFC8AD",
                fourth: "#F2F1EB",
            },
        },
    },

    plugins: [forms, flowbite],
};

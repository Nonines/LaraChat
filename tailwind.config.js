import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // https://goodpalette.io/1b2f40-f53d43-b4babf
                primary: {
                    100: "#F2F6FF",
                    200: "#CFDFFC",
                    300: "#9FBDE7",
                    400: "#6286AE",
                    500: "#1B2F40",
                    600: "#122939",
                    700: "#0D2633",
                    800: "#0A232D",
                    900: "#091F26",
                },
                secondary: {
                    100: "#FFF2F2",
                    200: "#FFC6C6",
                    300: "#FE9898",
                    400: "#FB6B6B",
                    500: "#F53D43",
                    600: "#C11A29",
                    700: "#8E0B1E",
                    800: "#5A0517",
                    900: "#26020C",
                },
            },
            padding: {
                "brand-small": "2rem",
            },
        },
    },

    plugins: [forms, typography],
};

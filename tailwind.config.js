/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                amsan: {
                    DEFAULT: "#0FA958",
                    light: "#D9FBEA",
                    dark: "#0B7C42",
                },
            },
        },
    },
    plugins: [],
};

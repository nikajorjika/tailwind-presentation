

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            spacing: {
                1: "0.1875rem",
            },
        },
    },
    variants: {

        extend: {},

    },
    plugins: [require("@tailwindcss/typography")],
};

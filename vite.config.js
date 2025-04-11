import { defineConfig } from "vite";
import tailwindcss from '@tailwindcss/vite'
import react from "@vitejs/plugin-react"; // 先に import
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        tailwindcss(),
        react(), // react を最初に
        laravel({
            input: ["resources/css/app.css", "resources/js/app.jsx"],
            refresh: true,
        }),
    ],
});

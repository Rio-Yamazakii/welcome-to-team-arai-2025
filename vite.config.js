import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwindcss from '@tailwindcss/vite';



export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'], // .jsxが正しいこと
            refresh: true,
        }),
        tailwindcss(),
        react(), // ← 必須
    ],
    server: {
        host: '127.0.0.1', // ← IPv6 (::1)ではなく明示的にIPv4を指定してみて
        port: 5173,
        strictPort: true,
        cors: {
            origin: 'http://akihiro.local', // 実際にアクセスしているドメインに置き換える
        },
    },
});

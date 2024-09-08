import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        https: true, // Use this for development HTTPS; set to false for non-HTTPS
        proxy: {
            // Add a proxy if you need to proxy API requests during development
            '/api': 'http://localhost',
        },
    },
    build: {
        assetsDir: 'build/assets',
        assetsInlineLimit: 0,
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});

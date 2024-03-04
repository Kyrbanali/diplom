import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/appp.css', 'resources/js/appp.js'],
            refresh: true,
        }),
    ],
});

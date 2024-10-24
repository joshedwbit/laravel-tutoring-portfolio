import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/toggle-filters.js',
                'resources/js/twitter-dropdown.js',
                'resources/js/feedback-success-carousel.js'
            ],
            refresh: true,
        }),
    ],
});

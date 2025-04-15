import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/twitter-dropdown.js',
                'resources/js/feedback-success-carousel.js',
                'resources/js/feedback-success-carousel-v2.js',
                'resources/js/homepage-reviews-carousel.js'
            ],
            refresh: true,
        }),
    ],
});

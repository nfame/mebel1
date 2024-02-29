import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});


// u tebya ne ustanovlen chocolate plugin - eto raz
// vtoroe - node bul starui
// tretie composer kak to ustanovilsya - no npm starui

// Tu hot' obnovlyai inogda komp

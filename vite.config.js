import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import liveReload from 'vite-plugin-live-reload'

export default defineConfig({
    plugins: [
        liveReload('./app/Http/**/*.php'),
        laravel({
            input: [
                'resources/css/backend/app.css',
                'resources/js/backend/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});

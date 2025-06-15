import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // ADD THIS SERVER CONFIGURATION BLOCK
    server: {
        host: '0.0.0.0', // This makes Vite listen on all network interfaces inside the container
        port: 5173,      // Default Vite port
        hmr: {
            // This 'host' should be reachable from your *browser*.
            // If your app is accessed at localhost:8000, then 'localhost' is usually correct.
            host: 'localhost',
            port: 5173, // Ensure HMR port matches the server port
        },
        watch: {
            usePolling: true // Often needed for Docker volumes on Windows/WSL2
        }
    },
});

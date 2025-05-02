import { defineConfig } from 'vite';
<<<<<<< HEAD
import laravel from 'laravel-vite-plugin'; 
export default defineConfig({
  plugins: [
    laravel(['resources/css/app.css','resources/js/app.js',        
]),
  ],});
=======
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

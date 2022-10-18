import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/js/register.js',
            'resources/css/bootstrap/bootstrap.min.css',
            'resources/adminLTE/css/adminlte.min.css',
            'resources/plugins/fontawesome-free/css/all.min.css',
            'resources/puglins/overlayScrollbars/css/OverlayScrollbars.min.css',
            'resources/plugins/jquery/jquery.min.js',
            'resources/plugins/bootstrap/js/bootstrap.bundle.min.js',
            'resources/adminLTE/js/adminlte.js',
            'resources/plugins/jquery-mousewheel/jquery.mousewheel.js',
            'resources/plugins/raphael/raphael.min.js',
            'resources/plugins/jquery-mapael/jquery.mapael.min.js',
            'resources/plugins/jquery-mapael/maps/usa_states.min.js',
            'resources/plugins/jquery-mask/jquery.mask.min.js',
        ]),
    ],
});

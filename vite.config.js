import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                // Original backend admin panel assets
                "resources/scss/app.scss",
                "resources/scss/icons.scss",
                "resources/js/app.js",
                "resources/js/config.js",
                "resources/js/layout.js",
                "resources/js/pages/dashboard.js",
                // Additional CSS assets for admin components
                "node_modules/nouislider/dist/nouislider.min.css",
                "node_modules/glightbox/dist/css/glightbox.min.css",
                "node_modules/choices.js/public/assets/styles/choices.min.css",
                "node_modules/swiper/swiper-bundle.min.css",
                "node_modules/dropzone/dist/dropzone.css",
                "node_modules/sweetalert2/dist/sweetalert2.min.css",
                "node_modules/swiper/modules/navigation.css",
                "node_modules/quill/dist/quill.core.css",
                "node_modules/quill/dist/quill.snow.css",
                "node_modules/quill/dist/quill.bubble.css",
                "node_modules/flatpickr/dist/flatpickr.min.css",
                "node_modules/gridjs/dist/theme/mermaid.min.css",
                // Additional JS files for admin pages
                "resources/js/pages/gallery.js",
                "resources/js/pages/pos.js",
                "resources/js/pages/setting.js",
                "resources/js/pages/categories.js",
                "resources/js/pages/product.js",
                "resources/js/pages/widgets.js",
                "resources/js/pages/coming-soon.js",
                "resources/js/pages/app-chat.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        chunkSizeWarningLimit: 1000,
    },
});

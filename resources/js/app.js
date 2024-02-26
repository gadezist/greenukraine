import './bootstrap';
import {initMap} from "./map/init-map.js";

import Alpine from 'alpinejs';

$(function () {
    window.Alpine = Alpine;

    Alpine.start();

    const originalFetch = window.fetch;

    window.fetch = function(url, options) {
        // Глобальні заголовки
        const globalHeaders = {
            'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        };

        // Об'єднуємо глобальні заголовки з тими, які передані у параметрах
        options = options || {};
        options.headers = new Headers(Object.assign({}, globalHeaders, options.headers));

        // Викликаємо оригінальний метод fetch з зміненими параметрами
        return originalFetch(url, options);
    };

    initMap();
})


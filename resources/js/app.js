import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// var map = L.map('map').setView([48.505, 33.09], 7);

const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const google = L.tileLayer('http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}', {
    title: 'Google Satellite',
    type: 'base',
    visible: false,
});

// const esriWorldStreet = L.tileLayer({
//     source: L.xYZ({
//         url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}'
//     }),
//     title: 'Esri World Street',
//     type: 'base',
//     visible: false,
// });

// const baseMap = L.layerGroup({
//     title: 'Base maps',
//     layers: [osm]
// });
//
// const overlayGroup = L.layerGroup({
//     title: 'Overlay',
//     layers: []
// });

const baseMap = {
    'Osm': osm,
    'Google': google
}

var map = L.map('map', {
    center: [48.505, 33.09],
    zoom: 10,
});

osm.addTo(map);
google.addTo(map);

var layerControl = L.control.layers(baseMap).addTo(map);

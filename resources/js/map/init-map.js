import * as L from "leaflet";
import 'leaflet-draw';

// Import the Leaflet MapTiler Plugin
import { GeocodingControl } from "@maptiler/geocoding-control/leaflet";
import { MaptilerLayer } from "@maptiler/leaflet-maptilersdk";

import {drawBoundary, drawMarkers} from "./draw-geo-json.js";
import {createMarkerEvent} from "./create-marker-event.js";
import {deleteMarkerEvent} from "./delete-marker.js";
import {editMarkerEvent} from "./edit-marker.js";
import {closeContainerEvent} from "./close-container-event.js";
import {coordinatesMap} from "./coordinates-map.js";


export function initMap() {
    const apiKeyMaptiler = 'Ljk7TdTuwpSyvu1yqZm8';

    const osm = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
        maxZoom: 19,
        minZoom:5,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    const googleHybrid = L.tileLayer('http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}', {
        title: 'Google Satellite',
        type: 'base',
        visible: false,
        maxZoom: 19,
        minZoom:5,
    });

    const google = L.tileLayer('http://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}', {
        title: 'Google Satellite',
        type: 'base',
        visible: false,
        maxZoom: 19,
        minZoom:5,
    });

    const mapbox = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11', // можна змінити стиль на бажаний
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZ2FkZXppc3QiLCJhIjoiY2x0aWdsMTYwMGZ4NjJpcXFkNjl6Yzd4ayJ9.Qh_8DXg9LY2U7L_SJsu7oQ'
    })

    // const mapTiler = L.tileLayer(`https://api.maptiler.com/maps/83b92b59-0575-4988-822d-fc554a37838f/style.json?key=${apiKeyMaptiler}`,{ //style URL
    //     tileSize: 512,
    //     zoomOffset: -1,
    //     minZoom: 1,
    //     attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
    //     crossOrigin: true
    // })

    // const mtLayer = new MaptilerLayer({
    //     apiKey: apiKeyMaptiler,
    //     style: '83b92b59-0575-4988-822d-fc554a37838f',
    // });

    const baseMap = {
        'Google': google,
        'Google hybrid': googleHybrid,
        // 'Map Tiler': mapTiler,
        'Mapbox': mapbox,
        'Osm': osm,
    }

    let map = L.map('map', {
        center: [48.505, 33.09],
        zoom: 7,
        layers: [osm],
    });

    L.control.maptilerGeocoding({ apiKey: apiKeyMaptiler }).addTo(map);

    let layerControl = L.control.layers(baseMap).addTo(map);

    drawBoundary(map, layerControl)

    let drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);

    let drawControl = new L.Control.Draw({
        draw: {
            polygon: false,
            polyline: false,
            rectangle: false,
            circle: false,
            circlemarker: false,
        },
        edit: {
            featureGroup: drawnItems
        }
    });

    if (window.userRole === 'super-admin') {
        map.addControl(drawControl);
        coordinatesMap(map);
    }

    drawMarkers(map, drawnItems);

    createMarkerEvent(map, drawnItems)
    deleteMarkerEvent(map, drawnItems)
    editMarkerEvent(map, drawnItems)
    closeContainerEvent(map)
}

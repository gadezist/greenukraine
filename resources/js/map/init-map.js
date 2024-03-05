import {drawBoundary, drawMarkers} from "./draw-geo-json.js";
import {createMarkerEvent} from "./create-marker-event.js";
import {deleteMarkerEvent} from "./delete-marker.js";

export async function initMap() {
    const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        minZoom:5,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });

    const google = L.tileLayer('http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}', {
        title: 'Google Satellite',
        type: 'base',
        visible: false,
        maxZoom: 19,
        minZoom:5,
    });

    const baseMap = {
        'Google': google,
        'Osm': osm
    }

    let map = L.map('map', {
        center: [48.505, 33.09],
        zoom: 7,
        layers: [osm, google],
    });

    let layerControl = L.control.layers(baseMap).addTo(map);

    await drawBoundary('/get/geo-json', map, layerControl)

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
    }

    await drawMarkers(map, drawnItems);

    await createMarkerEvent(map, drawnItems)
    await deleteMarkerEvent(map, drawnItems)
}

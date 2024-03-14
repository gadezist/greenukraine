import {drawBoundary, drawMarkers} from "./draw-geo-json.js";
import {createMarkerEvent} from "./create-marker-event.js";
import {deleteMarkerEvent} from "./delete-marker.js";
import {editMarkerEvent} from "./edit-marker.js";

export async function initMap() {
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

    const baseMap = {
        'Google': google,
        'Google hybrid': googleHybrid,
        'Osm': osm,
        'Mapbox': mapbox
    }

    let map = L.map('map', {
        center: [48.505, 33.09],
        zoom: 7,
        layers: [osm, google, googleHybrid, mapbox],
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
    await editMarkerEvent(map, drawnItems)
}

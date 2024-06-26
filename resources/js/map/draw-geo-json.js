import ls from 'localstorage-slim';

L.Control.MarkerInfo = L.Control.extend({
    options: {
        position: 'topright'
    },
    onAdd: function (map) {
        var container = L.DomUtil.create('div', 'info panel parcel-map-info-panel');

        map.customControl = this;
        map.currentContainer = container;

        L.DomEvent.disableClickPropagation(container);

        return container;
    },
    onRemove: function(map) {
        delete map.customControl;
        map.removeControl(map.currentContainer);
    },
    updateContent: function (props, container) {
        let response = fetch('/marker/get/' + props.id, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).then(function(response) {
            return response.json();
        })
        response.then(data => this.getContainer().innerHTML = data.marker_table)
        this.objectId = props.id;
    },
});


export function drawBoundary(map, layerControl)
{
    let ukraine = {};
    let boundaries = ls.get('boundaries');
    if (boundaries) {
        let geojsonLayer = omnivore.topojson.parse(boundaries);
        geojsonLayer.setStyle({
            'fillOpacity': 0
        })
        geojsonLayer.addTo(map);
        layerControl.addOverlay(geojsonLayer, 'Ukraine').addTo(map);

        return;
    }
    let customLayer = L.geoJSON(null, {
        "fillOpacity": 0
    }).addTo(map);

    omnivore.topojson('data/ua_bound_reg.topojson', null, customLayer).addTo(map);
    layerControl.addOverlay(customLayer, 'Ukraine').addTo(map);

    fetch('data/ua_bound_reg.topojson')
        .then(response => {
            return response.text()
        })
        .then(boundaries => {
            ls.set('boundaries', boundaries, {ttl: 3600 * 24});
        })
}
export function drawMarkers(map, drawnItems)
{
    map.currentControl = new L.Control.MarkerInfo()

    fetch('/markers/all', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        L.geoJSON(json.markers, {
            pointToLayer: function (feature, latlng) {
                let marker = L.marker(latlng)
                marker.on('click', function (e) {
                    let markerContainer = map.currentControl.addTo(map);
                    markerContainer.updateContent(feature.properties, markerContainer)

                });
                drawnItems.addLayer(marker);
                return marker;
            }
        }).addTo(map);
    });
}

export function drawGeoJsonFromFile(map) {
    fetch('/get/geo-json', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify({
            'filename': 'ua_bound_reg'
        })
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        let customLayer = L.geoJSON(json.data, {
            "fillOpacity": 0
        }).addTo(map);
    });
}


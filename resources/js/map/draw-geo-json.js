
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
        }).then(function(response) {
            return response.json();
        })
        response.then(data => this.getContainer().innerHTML = data.marker_table)
        this.objectId = props.id;
    },
});


export async function drawBoundary(url, map, layerControl)
{
    fetch(url, {
        method: 'POST',
        body: JSON.stringify({
            'filename': 'ua_bound_reg.geojson'
        })
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        let ukraine = L.geoJSON(json.data, {
            "fillOpacity": 0
        }).addTo(map);
        layerControl.addOverlay(ukraine, 'Ukraine').addTo(map);
    });
}
export async function drawMarkers(map, drawnItems)
{
    map.currentControl = new L.Control.MarkerInfo()

    fetch('/markers/all', {
        method: 'POST',
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        console.log(json)
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


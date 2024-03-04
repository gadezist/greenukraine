
L.Control.MarkerInfo = L.Control.extend({
    options: {
        position: 'topright'
    },
    onAdd: function (map) {
        var container = L.DomUtil.create('div', 'info panel parcel-map-info-panel');
        map.customControl = this;

        L.DomEvent.disableClickPropagation(container);

        return container;
    },
    onRemove: function(map) {
        delete map.customControl;
    },
    updateContent: function (props, container) {
        let response = fetch('/marker/' + props.id, {
            method: 'POST',
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
            'filename': 'ukraine-boundaries.json'
        })
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        let ukraine = L.geoJSON(json.data, {
            "fillOpacity": 0
        }).addTo(map);

        // let ukraineGroup = L.layerGroup([ukraine]);
        // let overlayMaps = {
        //     "Ukraine": ukraineGroup
        // };
        layerControl.addOverlay(ukraine, 'Ukraine').addTo(map);
        });
}

let markerInfo = new L.Control.MarkerInfo()

export async function drawMarkers(map, drawnItems)
{
    fetch('/markers/all', {
        method: 'POST',
    }).then(function(response) {
        return response.json();
    }).then(function(json) {
        console.log(json)
        closeMarkerInfoEvent(map);
        L.geoJSON(json.markers, {
            pointToLayer: function (feature, latlng) {
                let marker = L.marker(latlng)
                marker.on('click', function (e) {

                    let markerContainer = markerInfo.addTo(map);
                    markerContainer.updateContent(feature.properties, markerContainer)

                });
                drawnItems.addLayer(marker);
                return marker;
            }
        }).addTo(map);
    });
}

async function closeMarkerInfoEvent(map) {
    $(document).on('click', '#close-button', function() {
        map.removeControl(markerInfo);
    });
}

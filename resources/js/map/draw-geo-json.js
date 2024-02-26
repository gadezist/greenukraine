
L.Control.MarkerInfo = L.Control.extend({
    options: {
        position: 'topright'
    },
    onAdd: function (map) {
        var container = L.DomUtil.create('div', 'info panel parcel-map-info-panel');



        L.DomEvent.disableClickPropagation(container);

        return container;
    },
    onRemove: function(map) {

    },
    updateContent: function (props) {
        this.getContainer().innerHTML = this._getContent(props)
    },
    _getContent: function (props) {
        fetch('/marker/' + props.id, {
            method: 'POST',
        }).then(function(response) {
            return response.json();
        })
    }
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
export async function drawMarkers(map)
{
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
                    markerInfo.updateContent(feature.properties)

                    markerInfo.addTo(map);
                    // // Отримуємо властивості об'єкта, представленого маркером
                    // var properties = feature.properties;
                    // // Оновлюємо вміст контролу з відображенням даних маркера
                    // customControl.update(properties);
                });

                return marker;
            }
        }).addTo(map);
    });
}

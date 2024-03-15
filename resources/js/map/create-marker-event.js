
export async function createMarkerEvent(map, drawnItems) {

    let customControl = null;
    let marker = null;

    map.on(L.Draw.Event.CREATED, function (e) {
        marker = e.layer;

        if (e.layerType === 'marker') {
            drawnItems.addLayer(marker);
            // map.addLayer(layer);
            customControl = handleMarkerCreation();
        }
    });

    L.Control.Custom = L.Control.extend({
        options: {
            position: 'topright'
        },
        onAdd: function (map) {

            // Add reference to map
            var container = L.DomUtil.create('div', 'info panel parcel-map-info-panel');

            let form = document.getElementById('marker-create')
            var clonedForm = form.cloneNode(true);
            container.appendChild(clonedForm);
            clonedForm.style.display = "block"

            container.querySelector("#create-marker-form").addEventListener("submit", function(event){
                event.preventDefault()
                let formData = new FormData(this);
                let coord = marker.getLatLng();

                formData.append('lat', coord.lat)
                formData.append('lng', coord.lng)

                $.ajax({
                    url: '/admin/marker/store',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        map.removeControl(customControl);
                        toastr.success('Point was created');
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            });

            L.DomEvent.disableClickPropagation(container);
            map.customControl = this;
            map.currentContainer = container;

            return container;
        },
        onRemove: function (map) {
            // Remove reference from map
            map.removeControl(map.currentContainer);
            delete map.customControl;
        },
    });

    function handleMarkerCreation() {
        if (map.currentContainer !== undefined) {
            map.removeControl(map.currentContainer);
        }
        let formMarkerPanel = new L.Control.Custom();
        formMarkerPanel.addTo(map);

        return formMarkerPanel;
    }
}




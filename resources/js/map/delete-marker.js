

export function deleteMarkerEvent(map, drawnItems) {

    map.on('draw:deleted', function (e) {
        let markers = e.layers;

        markers.eachLayer(function(layer) {
            if (layer instanceof L.Marker) {
                fetch('/admin/marker/delete/' + layer.feature.properties.id, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                }).then(function (response) {
                    if (response.status === 200) {
                        toastr.success('Object successful deleted')
                        map.removeControl(map.customControl)
                        return
                    } else if (response.status === 405) {
                        toastr.error('You are not authorized to perform this operation')
                    } else {
                        toastr.error('Something wrong')
                    }
                    drawnItems.addLayer(layer);
                }).catch(error => {
                    toastr.error('Something wrong: ' + error.message);
                    drawnItems.addLayer(layer);
                });
            }
        });
    });
}


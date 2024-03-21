
export function coordinatesMap(map) {
    let Coordinates = L.Control.extend({
        options: {
            position: 'bottomleft',
        },
        onAdd: function () {
            let container = L.DomUtil.create('div', '');
            container.setAttribute("id", "coordinates-map");

            return container;
        }
    });

    map.addControl(new Coordinates());

    map.addEventListener('mousemove', function (ev) {
        let lat = ((Math.round(ev.latlng.lat * 1000000)) / 1000000).toFixed(6);
        let lng = ((Math.round(ev.latlng.lng * 1000000)) / 1000000).toFixed(6);
        $('#coordinates-map').html('<i class="bx bx-navigation text-gray"></i>' + ' ' + lat + '  ' + lng);
    });

    /** Remove panel when cursor leave map  */
    map.addEventListener('mouseout', function () {
        $('#coordinates-map').html('');
    });


}

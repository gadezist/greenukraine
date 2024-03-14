

export async function editMarkerEvent(map, drawnItems) {

    map.on('draw:edited', function (e) {
        let markers = e.layers;

        console.log('start')
        markers.eachLayer(function(layer) {
            if (layer instanceof L.Marker) {
                console.log('edit');
            }
        });
    });

    // marker.on('editable:editing', function (e) {
    //     // Відкрийте форму редагування, наприклад, показавши модальне вікно
    //     // або використовуйте ваш спосіб відображення форми редагування
    //     console.log('editable:editing') // Припустимо, що у вас є функція openEditForm, яка відкриває форму редагування
    // });
    //
    // marker.on('editable:vertex:dragend', function (e) {
    //     var newLatLng = e.vertex.latlng; // Нові координати маркера
    //
    //     // Оновіть дані про точку в вашій формі редагування відповідно до нових координат
    //     console.log(newLatLng) // Припустимо, що у вас є функція updateFormData, яка оновлює дані форми редагування
    //
    //     // Тут ви можете здійснити збереження змінених даних, наприклад, викликаючи AJAX-запит на сервер
    //     // Після успішного збереження даних, ви можете викликати якусь функцію або зробити щось інше
    //     // saveEditedData(formData); // Припустимо, що у вас є функція, яка зберігає дані на сервері
    // });
}


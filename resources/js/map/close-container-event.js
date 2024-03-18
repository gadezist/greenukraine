export async function closeContainerEvent(map) {
    $(document).on('click', '#close-button', function() {
        map.customControl.onRemove(map);
    });
}

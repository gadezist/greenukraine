
<x-app-layout :mapHeader="true">
    @section('css_section')
        @vite([
            'resources/css/swiper/swiper-marker-info.css',
            'resources/css/map.css',
            'node_modules/leaflet/dist/leaflet.css',
            'node_modules/leaflet-draw/dist/leaflet.draw.css',
            "node_modules/@maptiler/sdk/dist/maptiler-sdk.css",
            "node_modules/@maptiler/geocoding-control/style.css",
            ])
    @endsection
    @section('header_scripts')
            <script src='//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.3.1/leaflet-omnivore.min.js'></script>
    @endsection

    <div id="map" class="map"></div>
    <div style="display: none" id="marker-create">
        <x-create-marker-form>

        </x-create-marker-form>
    </div>

    <!-- holder for the fullscreen slider -->
        <div id="fullscreen-swiper-backdrop"></div>
        <div id="fullscreen-swiper"></div>

    <script>
        window.userRole = ("{{ $user_role }}")
    </script>


    @section('footer_scripts')
        @vite([
            'resources/js/swiper/swiper-marker-info.js',
            'resources/js/map/map.js'
            ])
    @endsection
</x-app-layout>


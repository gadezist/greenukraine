
<x-app-layout :mapHeader="true">
    @section('css_section')
        @vite(['resources/css/swiper/swiper-marker-info.css'])
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
        @vite(['resources/js/swiper/swiper-marker-info.js'])
        @vite(['resources/js/map/map.js'])
    @endsection
</x-app-layout>


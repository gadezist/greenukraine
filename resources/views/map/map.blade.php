
<x-app-layout :mapHeader="true">
    @section('header_scripts')
        @vite(['resources/js/map/map.js'])
    @endsection

    <div id="map" class="map"></div>
    <div style="display: none" id="marker-create">
        <x-create-marker-form>

        </x-create-marker-form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>


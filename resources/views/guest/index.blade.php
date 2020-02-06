@extends('layouts.base')
 @push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
@endpush
@section('content')
    @include('guest.about-modal')
    @include('guest.list-modal')
    @push('scripts')
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
    <script>
        var url = '{{url("images")}}/'
        var greenIcon = L.icon({
            iconUrl: url + 'marker-icon.png',
            iconSize:     [25, 42], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        var greenIcon = L.icon({
            iconUrl: url + 'marker-icon.png',
            iconSize:     [25, 42], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
        var baseUrl = "{{ url('/') }}";
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        map.on('zoomend', function() {
            var currentZoom = map.getZoom(); 
            if (currentZoom > 15) { 
                map.removeLayer(icons);
                map.addLayer(icons2);
            }
        })
        L.marker([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {icon: greenIcon}).addTo(map);
    </script>
    @endpush
@endsection

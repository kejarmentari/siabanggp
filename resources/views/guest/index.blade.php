@extends('layouts.base')
 @push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <style>
        .list-card:hover h5, .list-card .card  {
            transition: all ease-in-out .3s;
        }
        .list-card:hover {
            text-decoration: none !important;
        }
        .list-card .card {
            box-shadow: 6px 6px 10px rgba(0,0,0,.1);
            border: 1px solid #f9f9f9;
        }
        .list-card:hover .card {
            border-color: #198ae3;
        }
        .list-card:hover h5 {
            color: #198ae3;
        }
    </style>
@endpush
@section('content')
    @include('guest.about-modal')
    @include('guest.list-modal')
    @push('scripts')
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
    <script src="{{ asset('js/guest.js') }}"></script>
    <script>
        $(function() {
            
            const url = '{{url("images")}}/'
            const icon = L.icon({
                iconUrl: url + 'marker-icon.png',
                iconSize:     [25, 42], // size of the icon
                shadowSize:   [50, 64], // size of the shadow
                iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62],  // the same for the shadow
                popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            const map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
            const baseUrl = "{{ url('/') }}";
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            map.on('zoomend', function() {
                const currentZoom = map.getZoom(); 
                if (currentZoom > 15) { 
                    map.removeLayer(icons);
                    map.addLayer(icons2);
                }
            })
            $.ajax({
                url:'/api/surveys',
                dataType: 'json',
                success: function(resp) {
                    for(let survey in resp.surveys) {
                        L.marker([parseFloat(resp.surveys[survey].latitude), parseFloat(resp.surveys[survey].longitude)], {icon: icon})
                            .bindPopup(`
                                <div style="width: 300px!important;">
                                    <h5>${resp.surveys[survey].nama_gedung}</h5>
                                    <h6 class="text-muted mb-2">${resp.surveys[survey].kode}</h6>
                                    <h6 >Fungsi Gedung : </h6>
                                    <h6 class="font-weight-normal mb-2">Sesuatu</h6>
                                    <h6 >Fungsi Gedung : </h6>
                                    <h6 class="font-weight-normal mb-2">Sesuatu</h6>
                                    <h6 >Fungsi Gedung : </h6>
                                    <h6 class="font-weight-normal mb-2">Sesuatu</h6>
                                    <img class="gedung-image" style="display:none" width="100%" src="${resp.surveys[survey].foto}" />
                                    <p class="text-info show-more" style="cursor:pointer">+ more info</p>
                                </div>
                            `)
                            .addTo(map);
                    }
                }
            })
            
        })</script>
    @endpush
@endsection

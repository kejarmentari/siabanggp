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
    @endpush
@endsection

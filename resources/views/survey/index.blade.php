@extends('layouts.base', ['title' => 'Data Gedung'])

@section('content')
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="list-group">
                @foreach ($surveys as $survey)
                    <button type="button" class="list-group-item list-group-item-action py-3">{{$survey->nama_gedung}}</button>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body" id="mapid"></div>
                </div>
            </div>
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <style>
        #mapid { height: 400px; }
    </style>
    @endpush
    @push('js')
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
    <script src="{{asset('js/admin.js')}}"></script>
    @endpush
    
@endsection

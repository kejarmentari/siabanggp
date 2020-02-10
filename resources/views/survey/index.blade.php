@extends('layouts.base', ['title' =>'Data Gedung'])

@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 40px !important;">Kode</th>
                            <th>Nama Bangunan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveys as $survey)
                            @if ($loop->first)
                                <tr data-id="{{$survey->id}}" data-lat="{{$survey->latitude}}"data-long="{{$survey->longitude}}" class="selected" >
                                    <td style="width: 40px !important;">{{ $survey->kode }}</td>
                                    <td>{{ $survey->nama_gedung }}</td>
                                </tr>
                            @else
                                <tr data-id="{{$survey->id}}" data-lat="{{$survey->latitude}}"data-long="{{$survey->longitude}}">
                                    <td style="width: 40px !important;">{{ $survey->kode }}</td>
                                    <td>{{ $survey->nama_gedung }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        {{-- map card --}}
        <div class="card mb-3">
            <div class="card-body">
                <h4>Peta</h4>
                <div  id="mapid"></div>
                <small class="mb-0 mt-3 d-block">Latitude (X) &nbsp;&nbsp; :  <span class="selected-lat"></span></small>
                <small class="mb-0">Longitude (Y) :  <span class="selected-long"></span></small>
            </div>
        </div>

        {{-- action card --}}
        <div class="card">
            <div class="card-body">
                <h4>Aksi</h4>
                <div class="d-flex justify-content-start">
                <a href="#" class="btn btn-sm  btn-success mr-2 detail-button">
                    Detail
                </a>
                <a href="#" class="btn btn-sm  btn-info mr-2 edit-button">
                    Ubah
                </a>
                <a href="#" class="btn btn-sm  btn-danger mr-2 hapus-button">
                    Hapus
                </a>
                <a href="#" class="btn btn-sm  btn-warning cetak-button">
                    Cetak
                </a>
                </div>
            </div>
        </div>

        {{-- hidden form delete --}}
        <form action="" id="form-delete" data-url="{{ url('survey') }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection


@push('styles')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    {{-- custom css --}}
    @include('survey._css')
@endpush

@push('scripts')
    {{-- datatable --}}
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
    {{-- custom js --}}
    @include('survey._js')
@endpush

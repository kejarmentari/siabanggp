@extends('layouts.base', ['title' =>'Data Gedung'])

@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Bangunan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveys as $survey)
                            @if ($loop->first)
                                <tr data-id="{{$survey->id}}" data-lat="{{$survey->latitude}}"data-long="{{$survey->longitude}}" class="selected" >
                                    <td>{{ $survey->kode }}</td>
                                    <td>{{ $survey->nama_gedung }}</td>
                                </tr>
                            @else
                                <tr data-id="{{$survey->id}}" data-lat="{{$survey->latitude}}"data-long="{{$survey->longitude}}">
                                    <td>{{ $survey->kode }}</td>
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
    </div>
</div>
@endsection


@push('styles')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <style>
        #mapid {
            height: 200px;
            width: 100%;
        }
        div.dataTables_wrapper div.dataTables_length label {
            margin-top: 9px;
        }
        table tbody  tr {
            cursor: pointer;
        }
        table tbody tr.selected {
            background: #198ae3!important;
            color: #fff;
        }
        table tbody tr:not(.selected):hover {
            background:  #198ae3;
            filter: opacity(.7);
            color: #fff;
        }
        select.form-control {
            padding: 0 1.5rem 0 .5rem;
        }
        div.dataTables_wrapper div.dataTables_paginate {
            margin-top: 1rem;
        }
        div.dataTables_wrapper div.dataTables_info {
            padding-top: 1.5em;
            font-size: .9rem;
        }
    </style>
@endpush

@push('scripts')
    {{-- datatable --}}
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
    <script>
        $(function () {
            // datatable
            var map = L.map('mapid').setView([$('table tbody tr.selected').data('lat'), $('table tbody tr.selected').data('long')], {{ config('leaflet.detail_zoom_level') }});
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([$('table tbody tr.selected').data('lat'),$('table tbody tr.selected').data('long')]).addTo(map)
                .bindPopup('');
            $('.table').DataTable({
                "language": {
                    "sProcessing": "Sedang proses...",
                    "sLengthMenu": "Tampilan _MENU_ entri",
                    "sZeroRecords": "Tidak ditemukan data yang sesuai",
                    "sInfo": "Tampilan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty": "Tampilan 0 hingga 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix": "",
                    "sSearch": "Cari:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "<i class='mdi mdi-chevron-double-left'></i>",
                        "sPrevious": "<i class='mdi mdi-arrow-left'></i>",
                        "sNext": "<i class='mdi mdi-arrow-right'></i>",
                        "sLast": "<i class='mdi mdi-chevron-double-right'></i>"
                    }
                }
            });
            $('table tbody tr').on('click', function() {
                $(this).siblings('tr').removeClass('selected');
                $(this).addClass('selected');
                $('.selected-lat').html($(this).data('lat'));
                $('.selected-long').html($(this).data('long'));
                map.setView([$(this).data('lat'), $(this).data('long')], {{ config('leaflet.detail_zoom_level') }})
                L.marker([$(this).data('lat'), $(this).data('long')]).addTo(map)
                .bindPopup('');
            })
            $('.selected-lat').html($('table tbody tr.selected').data('lat'));
            $('.selected-long').html($('table tbody tr.selected').data('long'));
            $('.detail-button').on('click', function(e) {
                e.preventDefault();
                $(location).attr('href',`/survey/${$('table tbody tr.selected').data('id')}`);
            })
            $('.edit-button').on('click', function(e) {
                e.preventDefault();
                $(location).attr('href',`/survey/edit/${$('table tbody tr.selected').data('id')}`);
            })
            $('.cetak-button').on('click', function(e) {
                e.preventDefault();
                $(location).attr('href',`/cetak/${$('table tbody tr.selected').data('id')}`);
            })
        })
    </script>
@endpush

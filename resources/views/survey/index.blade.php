@extends('layouts.base', ['title' =>'Data Gedung'])

@section('content')
<div class="row">
    <div class="col-md-8">
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
                            <tr>
                                <td>{{ $survey->kode }}</td>
                                <td>{{ $survey->nama_gedung }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        {{-- map card --}}
        <div class="card mb-3">
            <div class="card-body">
                <h4>Peta</h4>
                <img src="http://cdn.ndtv.com/tech/images/gadgets/google-maps-sena-bhawan-635.jpg" alt="maps preview" class="img-fluid mb-2">
                <small class="mb-0">Latitude (X) &nbsp;&nbsp; : 10101010.1</small>
                <small class="mb-0">Longitude (Y) : 101032122.1</small>
            </div>
        </div>

        {{-- action card --}}
        <div class="card">
            <div class="card-body">
                <h4>Aksi</h4>
                <a href="#" class="btn btn-sm btn-block btn-success">
                    Detail Survey
                </a>
                <a href="#" class="btn btn-sm btn-block btn-info">
                    Ubah Data
                </a>
                <a href="#" class="btn btn-sm btn-block btn-danger">
                    Hapus Data
                </a>
            </div>
        </div>
    </div>
</div>
>>>>>>> d2c53eb19df9a5b0a5f18511753b65901126b16c
@endsection


@push('styles')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        div.dataTables_wrapper div.dataTables_length label {
            margin-top: 9px;
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

    <script>
        $(function () {
            // datatable
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
        })
    </script>
@endpush

@extends('layouts.base', ['title' => 'Tambah Data Survey'])

@section('content')
    <div class="row">
        <form class="forms-sample" action="/survey" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <h3 class="mb-3">DATA UMUM</h3>
                            <div class="row mb-3">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kodeBangunan">Kode Bangunan</label>
                                        <input type="text" name="kodeBangunan" class="form-control" id="kodeBangunan" placeholder="Kode Bangunan">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="koordinatY">Posisi Koordinat X</label>
                                                <input type="text" name="latitude" class="form-control" id="koordinatY" placeholder="Koordinat Y">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="koordinatX">Posisi Koordinat Y</label>
                                                <input type="text" name="longitude" class="form-control" id="koordinatX" placeholder="Koordinat X">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="button" class="btn btn-info" id="submitCoordinate">Cari Koordinat</button>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div id="create-mapid"></div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" id="foto-source" name="foto"  onchange="previewImage()">
                                    </div>
                                    <img id="foto-preview" class="img-thumbnail" src="https://via.placeholder.com/415x300.png?text=Tidak+Ada+Foto" alt="preview photo">
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="youtube_id">Youtube ID</label>
                                        <div class="input-group mb-4">
                                            <input type="text" name="youtube_id" class="form-control" id="youtube_id" placeholder="Youtube ID">
                                            <div class="input-group-prepend">
                                                <a href="#" class="btn btn-info youtube-refresh">Refresh</a>
                                            </div>
                                        </div>
                                        <iframe class="youtube-video" width="100%" class="mt-4" height="300" src="https://www.youtube.com/embed/null" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_indo">Tanggal</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-calendar-text"></i></span>
                                    </div>
                                    <input class="form-control datepicker-id" placeholder="Tanggal" name="tanggal_indo" type="text" value="{{ old('tanggal_indo', $date) }}" autocomplete="off" id="tanggal_indo">
                                    <input type="hidden" id="hidden_date" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}">
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label for="pemilik_gedung">Nama Pemilik Bangunan</label>
                                <input type="text" name="pemilik_gedung" class="form-control" id="pemilik_gedung" placeholder="Nama Pemilik Bangunan">
                            </div>
                            <div class="form-group">
                                <label for="nama_gedung">Nama Bangunan Gedung</label>
                                <input type="text" name="nama_gedung" class="form-control" id="nama_gedung" placeholder="Nama Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="fungsi_gedung">Fungsi Bangunan Gedung</label>
                                <input type="text" name="fungsi_gedung" class="form-control" id="fungsi_gedung" placeholder="Fungsi Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="klasifikasi_gedung">Klasifikasi Bangunan Gedung</label>
                                <input type="text" name="klasifikasi_gedung" class="form-control" id="klasifikasi_gedung" placeholder="Klasifikasi Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="lokasi_gedung">Lokasi Bangunan Gedung</label>
                                <input type="text" name="lokasi_gedung" class="form-control" id="lokasi_gedung" placeholder="Lokasi Bangunan Gedung">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Jumlah Lantai Bangunan Gedung</label>
                                        <div class="input-group">
                                            <input name="jumlah_lantai" type="number" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Lantai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Ketinggian Bangunan</label>
                                        <div class="input-group">
                                            <input name="ketinggian" type="number" class="form-control" placeholder="Ketinggian" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Luas Lantai Bangunan</label>
                                        <div class="input-group">
                                            <input name="luas_lantai" type="number" class="form-control" placeholder="Luas Lantai" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter Persegi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Luas Lantai Dasar Bangunan Gedung</label>
                                        <div class="input-group">
                                            <input name="luas_lantai_dasar" type="number" class="form-control" placeholder="Luas Lantai Dasar" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter Persegi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Luas Tanah</label>
                                        <div class="input-group">
                                            <input name="luas_tanah" type="number" class="form-control" placeholder="Luas Tanah" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter Persegi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="surat_bukti">Surat Bukti Atas Tanah</label>
                                <select name="surat_bukti" class="form-control" id="surat_bukti">
                                    <option value="1">Sertifikat</option>
                                    <option value="2">IMTN</option>
                                    <option value="3">Bukti Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pptk">Nama PPTK</label>
                                <input name="pptk" type="text" class="form-control" id="pptk" placeholder="Nama PPTK">
                            </div>
                            <div class="form-group mb-4">
                                <label for="ppk">Nama PPK</label>
                                <input name="ppk" type="text" class="form-control" id="ppk" placeholder="Nama PPK">
                            </div>
                            <h3 class="mt-4 mb-3">DATA TEKNIS</h3>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group mb-4">
                                        <label for="tahun_anggaran">Tahun Anggaran</label>
                                        <input name="tahun_anggaran" type="number" class="form-control" id="tahun_anggaran" placeholder="Tahun Anggaran">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="form-group">
                                        <label for="cara_pelaksanaan">Cara Pelaksanaan</label>
                                        <select name="cara_pelaksanaan" class="form-control" id="cara_pelaksanaan">
                                            <option value="0">Swasta</option>
                                            <option value="1">Perusahaan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-4">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-9">
                                <h3>A. DATA ADMINISTRASI</h3>
                            </div>
                            <div class="col-3 text-right ">
                                <button class="btn btn-success btn-sm mr-3 show-survey-selections">Show</button>
                                <button class="btn btn-danger btn-sm hide-survey-selections" >Hide</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 survey-index-selections">
                        @php $no = 1; @endphp
                        @foreach ($selections as $selection)
                            @if ($selection->type === 1)
                            <div class="form-group">
                                <label><b>{{ $no++ }}. {{$selection->title}}</b></label>
                                <div class="row mt-1">
                                    <div class="col-md-4 col-12 p-l-2-1">
                                        <label for="">Pilihan</label>
                                        <div class="d-flex mt-0">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input value="1" type="radio" class="form-check-input" name="selection_{{$selection->id}}">
                                                Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input checked value="0" type="radio" class="form-check-input" name="selection_{{$selection->id}}">
                                                Tidak Sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input  type="text" class="form-control" placeholder="(opsional)" name="selection_{{$selection->id}}_desc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-4">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-9">
                                <h3>B. DATA KONSTRUKSI</h3>
                            </div>
                            <div class="col-3 text-right ">
                                <button class="btn btn-success btn-sm mr-3 show-survey-selections">Show</button>
                                <button class="btn btn-danger btn-sm hide-survey-selections" >Hide</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 survey-index-selections">
                        @php $no = 1; @endphp
                        @foreach ($selections as $selection)
                            @if ($selection->type === 2)
                            <div class="form-group">
                                <label><b>{{ $no++ }}. {{$selection->title}}</b></label>
                                <div class="row mt-1">
                                    <div class="col-md-4 col-12 p-l-2-1">
                                        <label for="">Pilihan</label>
                                        <div class="d-flex mt-0">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input value="1" type="radio" class="form-check-input" name="selection_{{$selection->id}}">
                                                Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input checked value="0" type="radio" class="form-check-input" name="selection_{{$selection->id}}">
                                                Tidak Sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" class="form-control" placeholder="(opsional)" name="selection_{{$selection->id}}_desc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-4">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-9">
                                <h3>C. DATA PEMELIHARAAN</h3>
                            </div>
                            <div class="col-3 text-right ">
                                <button class="btn btn-success btn-sm mr-3 show-survey-selections">Show</button>
                                <button class="btn btn-danger btn-sm hide-survey-selections" >Hide</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 survey-index-selections">
                        @php $no = 1; @endphp
                        @foreach ($selections as $selection)
                            @if ($selection->type === 3)
                            <div class="form-group">
                                <label><b>{{ $no++ }}. {{$selection->title}}</b></label>
                                <div class="row mt-1">
                                    <div class="col-md-4 col-12 p-l-2-1">
                                        <label for="">Pilihan</label>
                                        <div class="d-flex mt-0">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input value="1" type="radio" class="form-check-input" name="selection_{{$selection->id}}">
                                                Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input checked value="0" type="radio" class="form-check-input" name="selection_{{$selection->id}}">
                                                Tidak Sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" class="form-control" placeholder="(opsional)" name="selection_{{$selection->id}}_desc">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-lg btn-info btn-block">SIMPAN DATA SURVEY</button>
            </div>
        </form>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">

    <style>
        #create-mapid {
            height: 230px;
        }

        .form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
            background: -webkit-gradient(linear, left top, right top, from(#8acafd), to(#1a8ae3));
            background: linear-gradient(to right, #1a8ae3, #8acafd);
        }

        .form-check .form-check-label input[type="radio"] + .input-helper:before {
            border: solid #268fe5;
        }

        .pl-2-1 {
            padding-left: 2.1rem;
        }
    </style>
@endpush

@push('scripts')
    {{-- leaflet --}}
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
    {{-- datepicker --}}
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.id.min.js') }}"></script>
    {{-- moment --}}
    <script src="{{ asset('js/moment.min.js') }}"></script>
    {{-- custom admin js --}}
    <script src="{{ asset('js/admin.js') }}"></script>
@endpush


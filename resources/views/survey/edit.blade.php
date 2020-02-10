@extends('layouts.base', ['title' => 'Tambah Data Survey'])

@section('content')
    <div class="row">
        <form class="forms-sample" action="/survey/{{$survey->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <h3 class="mb-3">DATA UMUM</h3>
                            <div class="row mb-3">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kodeBangunan">Kode Bangunan</label>
                                        <input type="text" value={{$survey->kode}} name="kodeBangunan" class="form-control" id="kodeBangunan" placeholder="Kode Bangunan">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="koordinatX">Posisi Koordinat X</label>
                                                <input value={{$survey->latitude}} type="number" name="latitude" class="form-control" id="koordinatX" placeholder="Koordinat X">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="koordinatY">Posisi Koordinat Y</label>
                                                <input value={{$survey->longitude}} type="number" name="longitude" class="form-control" id="koordinatY" placeholder="Koordinat Y">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info" id="submitCoordinate">Cari Koordinat</button>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div id="create-mapid" class="mt-4"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                    @if ($survey->foto == null)
                                        <img style="height:300px!important; margin-left:10%" class="img-thumbnail" src="http://127.0.0.1:8000/storage/foto/default.png" alt={{$survey->foto}}>
                                    @else
                                        <img style="height:300px!important; margin-left:10%" class="img-thumbnail" src="http://127.0.0.1:8000/storage/foto/{{$survey->foto}} alt={{$survey->foto}}>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="youtube_id">Youtube ID</label>
                                        <div class="input-group mb-4">
                                            <input value="{{$survey->youtube_id}}" type="text" name="youtube_id" class="form-control" id="youtube_id" placeholder="Youtube ID">
                                            <div class="input-group-prepend">
                                                <a href="#" class="btn btn-info youtube-refresh">Refresh</a>
                                            </div>
                                        </div>
                                        <iframe class="youtube-video" width="100%" class="mt-4" height="300" src="https://www.youtube.com/embed/{{$survey->youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input value="{{$survey->tanggal}}" name="tanggal" class="form-control datepicker" id="tanggal">
                            </div>
                            <div class="form-group mt-4">
                                <label for="pemilik_gedung">Nama Pemilik Bangunan</label>
                                <input value="{{$survey->pemilik_gedung}}" type="text" name="pemilik_gedung" class="form-control" id="pemilik_gedung" placeholder="Nama Pemilik Bangunan">
                            </div>
                            <div class="form-group">
                                <label for="nama_gedung">Nama Bangunan Gedung</label>
                                <input value="{{$survey->nama_gedung}}" type="text" name="nama_gedung" class="form-control" id="nama_gedung" placeholder="Nama Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="fungsi_gedung">Fungsi Bangunan Gedung</label>
                                <input value="{{$survey->fungsi_gedung}}" type="text" name="fungsi_gedung" class="form-control" id="fungsi_gedung" placeholder="Fungsi Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="klasifikasi_gedung">Klasifikasi Bangunan Gedung</label>
                                <input value="{{$survey->klasifikasi_gedung}}" type="text" name="klasifikasi_gedung" class="form-control" id="klasifikasi_gedung" placeholder="Klasifikasi Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="lokasi_gedung">Lokasi Bangunan Gedung</label>
                                <input value="{{$survey->lokasi_gedung}}" type="text" name="lokasi_gedung" class="form-control" id="lokasi_gedung" placeholder="Lokasi Bangunan Gedung">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Jumlah Lantai Bangunan Gedung</label>
                                        <div class="input-group">
                                            <input value={{$survey->jumlah_lantai}} name="jumlah_lantai" type="number" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <input value={{$survey->ketinggian}} name="ketinggian" type="number" class="form-control" placeholder="Ketinggian" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <input value={{$survey->luas_lantai}} name="luas_lantai" type="number" class="form-control" placeholder="Luas Lantai" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <input value={{$survey->luas_lantai_dasar}} name="luas_lantai_dasar" type="number" class="form-control" placeholder="Luas Lantai Dasar" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <input value={{$survey->luas_tanah}} name="luas_tanah" type="number" class="form-control" placeholder="Luas Tanah" aria-label="Username" aria-describedby="basic-addon1">
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
                                    <option {{$survey->surat_bukti == 1? 'selected': ''}} value="1">Sertifikat</option>
                                    <option {{$survey->surat_bukti == 2? 'selected': ''}} value="2">IMTN</option>
                                    <option {{$survey->surat_bukti == 3? 'selected': ''}} value="3">Bukti Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pptk">Nama PPTK</label>
                                <input value="{{$survey->pptk}}" name="pptk" type="text" class="form-control" id="pptk" placeholder="Nama PPTK">
                            </div>
                            <div class="form-group mb-4">
                                <label for="ppk">Nama PPK</label>
                                <input  value="{{$survey->ppk}}" name="ppk" type="text" class="form-control" id="ppk" placeholder="Nama PPK">
                            </div>
                            <h3 class="mt-5 mb-3">DATA TEKNIS</h3>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="tahun_anggaran">Tahun Anggaran</label>
                                        <input value="{{$survey->tahun_anggaran}}" name="tahun_anggaran" type="number" class="form-control" id="tahun_anggaran" placeholder="Tahun Anggaran">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="form-group">
                                        <label for="cara_pelaksanaan">Cara Pelaksanaan</label>
                                        <select name="cara_pelaksanaan" class="form-control" id="cara_pelaksanaan">
                                            <option {{$survey->cara_pelaksanaan == 0? 'selected': ''}} value="0">Swasta</option>
                                            <option {{$survey->cara_pelaksanaan == 1? 'selected': ''}} value="1">Perusahaan</option>
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
                        @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 1)
                            <div class="form-group">
                                <label><b>{{ $loop->iteration }}. {{$selection->selection->title}}</b></label>
                                <div class="row mt-1">
                                    <div class="col-md-4 col-12 pl-2-1">
                                        <label for="">Pilihan</label>
                                        <div class="d-flex mt-0">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input {{$selection->choice == 1? 'checked': ''}} value="1" type="radio" class="form-check-input" name="selection_{{$selection->selection->id}}">
                                                Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input {{$selection->choice == 0? 'checked': ''}} value="0" type="radio" class="form-check-input" name="selection_{{$selection->selection->id}}">
                                                Tidak Sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input value="{{$selection->description}}"  type="text" class="form-control" placeholder="(opsional)" name="selection_{{$selection->selection->id}}_desc">
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
                        @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type === 2)
                            <div class="form-group">
                                <label><b>{{ $no++ }}. {{$selection->selection->title}}</b></label>

                                <div class="row mt-1">
                                    <div class="col-md-4 col-12 pl-2-1">
                                        <label for="">Pilihan</label>
                                        <div class="d-flex mt-0">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input {{$selection->choice == 1? 'checked': ''}} value="1" type="radio" class="form-check-input" name="selection_{{$selection->selection->id}}">
                                                Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input {{$selection->choice == 0? 'checked': ''}} value="0" type="radio" class="form-check-input" name="selection_{{$selection->selection->id}}">
                                                Tidak Sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input value="{{$selection->description}}"  type="text" class="form-control" placeholder="(opsional)" name="selection_{{$selection->selection->id}}_desc">
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
                        @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type === 3)
                            <div class="form-group">
                                <label><b>{{ $no++ }}. {{$selection->selection->title}}</b></label>

                                <div class="row mt-1">
                                    <div class="col-md-4 col-12 pl-2-1">
                                        <label for="">Pilihan</label>
                                        <div class="d-flex mt-0">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input {{$selection->choice == 1? 'checked': ''}} value="1" type="radio" class="form-check-input" name="selection_{{$selection->selection->id}}">
                                                Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input {{$selection->choice == 0? 'checked': ''}} value="0" type="radio" class="form-check-input" name="selection_{{$selection->selection->id}}">
                                                Tidak Sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input value="{{$selection->description}}"  type="text" class="form-control" placeholder="(opsional)" name="selection_{{$selection->selection->id}}_desc">
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
                <button type="submit" class="btn btn-lg btn-info btn-block">SIMPAN PERUBAHAN DATA SURVEY</button>
            </div>

        </form>
    </div>
    @push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <script src="{{ asset('css/bootstrap-datepicker.min.css') }}"></script>
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
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });</script>
    @endpush
@endsection


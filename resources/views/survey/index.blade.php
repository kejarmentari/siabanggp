@extends('layouts.base', ['title' => 'Data Survey'])

@section('content')
    <div class="row">
        <form class="forms-sample">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Kode Bangunan</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="hari-bulan-tahun">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Youtube ID</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Youtube ID">
                                    </div>
                                </div>
                            </div>
                            <h3>DATA UMUM</h3>
                            <div class="form-group mt-4">
                                <label for="exampleInputUsername1">Nama Pemilik Bangunan</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Pemilik Bangunan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Bangunan Gedung</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Bangunan Gedung">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Posisi Koordinat (X)</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Posisi Koordinat (X)">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Posisi Koordinat (Y)</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Posisi Koordinat (Y)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Fungsi Bangunan Gedung</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Fungsi Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Klasifikasi Bangunan Gedung</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Klasifikasi Bangunan Gedung">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Lokasi Bangunan Gedung</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Lokasi Bangunan Gedung">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Jumlah Lantai Bangunan Gedung</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Lantai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Ketinggian Bangunan</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Ketinggian" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Luas Lantai Bangunan</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Luas Lantai" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter Persegi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Luas Lantai Dasar Bangunan Gedung</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Luas Lantai Dasar" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter Persegi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Luas Tanah</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Luas Tanah" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Meter Persegi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Surat Bukti Atas Tanah</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option value="1">Sertifikat</option>
                                    <option value="2">IMTN</option>
                                    <option value="3">Bukti Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama PPTK</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama PPTK">
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleInputUsername1">Nama PPK</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama PPK">
                            </div>
                            <h3 class="mt-4">DATA TEKNIS</h3>
                            <div class="form-group mb-4 w-50">
                                <label for="exampleInputUsername1">Tahun Anggaran</label>
                                <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Tahun Anggaran">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Cara Pelaksanaan</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option value="0">Swasta</option>
                                    <option value="1">Perusahaan</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-4">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-9">
                                <h3>DATA ADMINISTRASI, KONSTRUKSI, DAN PEMELIHARAAN</h3>
                            </div>
                            <div class="col-3 text-right ">
                                <button class="btn btn-success btn-sm mr-3" id="show-survey-selections">Show</button>
                                <button class="btn btn-danger btn-sm" id="hide-survey-selections">Hide</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2" id="survey-index-selections">
                        <h3 class="mb-4">A. DATA ADMINISTRASI</h3>
                        @foreach ($selections as $selection)
                            @if ($selection->type === 1)
                            <div class="form-group">
                                <label>{{$selection->title}}</label>
                                <div class="d-flex mt-0">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="form-check">
                                        Sesuai
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="form-check">
                                        Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        <h3 class="mb-4">B. DATA KONSTRUKSI</h3>
                        @foreach ($selections as $selection)
                            @if ($selection->type === 2)
                            <div class="form-group">
                                <label>{{$selection->title}}</label>
                                <div class="d-flex mt-0">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="form-check">
                                        Sesuai
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="form-check">
                                        Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        <h3 class="mb-4">C. DATA PEMELIHARAAN</h3>
                        @foreach ($selections as $selection)
                            @if ($selection->type === 3)
                            <div class="form-group">
                                <label>{{$selection->title}}</label>
                                <div class="d-flex mt-0">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="form-check">
                                        Sesuai
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="form-check">
                                        Tidak Sesuai
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <button class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
    @push('scripts')
    <script src="{{ asset('js/admin.js') }}"></script>
    @endpush
@endsection

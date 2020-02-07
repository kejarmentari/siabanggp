@extends('layouts.base', ['title' =>'Detail Data Gedung'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-12 mt-2">
                        <h5>Kode Bangunan</h5>
                    </div>
                    <div class="col-md-9 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->kode}}</h5>
                    </div>
                    <div class="col-md-3 col-12 mt-2">
                        <h5>Tanggal</h5>
                    </div>
                    <div class="col-md-9 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->tanggal}}</h5>
                    </div>
                    <div class="col-md-3 col-12 mt-2">
                        <h5>Youtube ID</h5>
                    </div>
                    <div class="col-md-9 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->youtube_id}}</h5>
                    </div>
                    <div class="col-md-3 col-12 mt-2">
                        <h5>Foto :</h5>
                    </div>
                    <div class="col-md-9 col-12 mt-2">
                        <img height="200" src="{{$survey->foto}}" />
                    </div>
                </div>
                <h2 class="mt-4">I. DATA UMUM</h2>
                <div class="row no-gutters mt-3">
                    <div class="col-md-4 col-12 mt-2">
                        <h5>1. Nama Pemilik Bangunan Gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->pemilik_gedung}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>2. Nama Bangunan Gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->nama_gedung}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>3. Fungsi Bangunan Gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->fungsi_gedung == null ? '-' : $survey->fungsi_gedung}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>4. Klasifikasi bangunan gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->klasifikasi_gedung == null ? '-' : $survey->klasifikasi_gedung}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>5. Lokasi bangunan gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->lokasi_gedung == null ? '-' : $survey->lokasi_gedung}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>6. Jumlah lantai bangunan gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->jumlah_lantai}} Lantai</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>7. Ketinggian bangunan</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->ketinggian}} Meter</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>8. Jumlah lantai bangunan gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->luas_lantai}} Meter Persegi</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>9. Luas lantai dasar bangunan gedung</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->luas_lantai_dasar}} Meter Persegi</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>10. Luas lantai</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->luas_tanah}} Meter Persegi</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>11.  Posisi Koordinat (X,Y)</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->latitude}}, {{$survey->longitude}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>12.  Surat bukti atas hak tanah</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        @if ($survey->surat_bukti == 1)
                            <h5 class="font-weight-normal">: Sertifikat</h5>
                        @elseif($survey->surat_bukti == 2)
                        <h5 class="font-weight-normal">: IMTN</h5>
                        @else
                            <h5 class="font-weight-normal">: Bukti Lainnya</h5>
                        @endif
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>13. Nama PPTK</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->pptk == null ? '-' : $survey->pptk}}</h5>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h5>14. Nama PPK</h5>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h5 class="font-weight-normal">: {{$survey->ppk == null ? '-' : $survey->ppk}}</h5>
                    </div>

                    <div class="col-12">
                        <h2 class="mt-4">II. DATA TEKNIS</h2>
                    </div>
                        <div class="col-md-4 col-12 mt-2">
                            <h5>1. Tahun anggaran</h5>
                        </div>
                        <div class="col-md-8 col-12 mt-2">
                            <h5 class="font-weight-normal">: {{$survey->tahun_anggaran == null ? '-' : $survey->tahun_anggaran}}</h5>
                        </div>
                        <div class="col-md-4 col-12 mt-2">
                            <h5>2. Cara pelaksanaan</h5>
                        </div>
                        <div class="col-md-8 col-12 mt-2">
                            @if ($survey->cara_pelaksanaan == 0)
                                <h5 class="font-weight-normal">: Swasta</h5>
                            @else
                                <h5 class="font-weight-normal">: Perusahaan</h5>
                            @endif
                        </div>
                    <div class="col-12">
                        <h2 class="mt-4">A. DATA ADMINISTRASI</h2>
                        <div class="row">
                            @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 1)
                                <div class="col-md-4 col-12 mt-2">
                                    <h5>{{$selection->selection->title}}</h5>
                                </div>
                                <div class="col-md-8 col-12 mt-2">
                                    @if ($selection->choice == 0)
                                        <h5 class="font-weight-normal">: Tidak Sesuai</h5>
                                    @else
                                        <h5 class="font-weight-normal">: Sesuai</h5>
                                    @endif
                                    
                                </div>
                            @endif
                        @endforeach
                        </div>
                        
                        <h2 class="mt-4">B. DATA KONSTRUKSI</h2>
                        <div class="row">
                            @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 2)
                                <div class="col-md-4 col-12 mt-2">
                                    <h5>{{$selection->selection->title}}</h5>
                                </div>
                                <div class="col-md-8 col-12 mt-2">
                                    @if ($selection->choice == 0)
                                        <h5 class="font-weight-normal">: Tidak Sesuai</h5>
                                    @else
                                        <h5 class="font-weight-normal">: Sesuai</h5>
                                    @endif
                                    
                                </div>
                            @endif
                        @endforeach
                        </div>

                        <h2 class="mt-4">C. DATA PEMELIHARAAN</h2>
                        <div class="row">
                            @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 3)
                                <div class="col-md-4 col-12 mt-2">
                                    <h5>{{$selection->selection->title}}</h5>
                                </div>
                                <div class="col-md-8 col-12 mt-2">
                                    @if ($selection->choice == 0)
                                        <h5 class="font-weight-normal">: Tidak Sesuai</h5>
                                    @else
                                        <h5 class="font-weight-normal">: Sesuai</h5>
                                    @endif
                                    
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
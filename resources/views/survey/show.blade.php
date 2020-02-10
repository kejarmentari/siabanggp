@extends('layouts.base', ['title' =>'Detail Data Gedung'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-12 mt-2">
                        <h6>Kode Bangunan</h6>
                    </div>
                    <div class="col-md-9 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->kode}}</h6>
                    </div>
                    <div class="col-md-3 col-12 mt-2">
                        <h6>Tanggal</h6>
                    </div>
                    <div class="col-md-9 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->tanggal}}</h6>
                    </div>
                    <div class="col-md-3 col-12 mt-2">
                        <h6>Foto / Video</h6>
                    </div>
                    <div class="col-md-4 col-12 mt-2">
                        @if ($survey->foto == null)
                            <img class="img-thumbnail" src="https://via.placeholder.com/415x310.png?text=Tidak+Ada+Foto" />
                        @else
                            <img class="img-thumbnail" src="{{ asset('storage/foto/'. $survey->foto) }}" />
                        @endif
                    </div>
                    <div class="col-md-5 col-12 mt-2">
                        <div class="img-thumbnail">
                            <iframe width="100%" height="185" src="https://www.youtube.com/embed/{{$survey->youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <hr class="mt-4">

                <h3 class="mt-4">I. DATA UMUM</h3>
                <div class="row no-gutters mt-3">
                    <div class="col-md-4 col-12 mt-2">
                        <h6>1. Nama Pemilik Bangunan Gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->pemilik_gedung}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>2. Nama Bangunan Gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->nama_gedung}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>3. Fungsi Bangunan Gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->fungsi_gedung == null ? '-' : $survey->fungsi_gedung}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>4. Klasifikasi bangunan gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->klasifikasi_gedung == null ? '-' : $survey->klasifikasi_gedung}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>5. Lokasi bangunan gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->lokasi_gedung == null ? '-' : $survey->lokasi_gedung}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>6. Jumlah lantai bangunan gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->jumlah_lantai}} Lantai</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>7. Ketinggian bangunan</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->ketinggian}} Meter</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>8. Jumlah lantai bangunan gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->luas_lantai}} Meter Persegi</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>9. Luas lantai dasar bangunan gedung</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->luas_lantai_dasar}} Meter Persegi</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>10. Luas lantai</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->luas_tanah}} Meter Persegi</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>11.  Posisi Koordinat (X,Y)</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->latitude}}, {{$survey->longitude}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>12.  Surat bukti atas hak tanah</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        @if ($survey->surat_bukti == 1)
                            <h6 class="font-weight-normal">: Sertifikat</h6>
                        @elseif($survey->surat_bukti == 2)
                        <h6 class="font-weight-normal">: IMTN</h6>
                        @else
                            <h6 class="font-weight-normal">: Bukti Lainnya</h6>
                        @endif
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>13. Nama PPTK</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->pptk == null ? '-' : $survey->pptk}}</h6>
                    </div>

                    <div class="col-md-4 col-12 mt-2">
                        <h6>14. Nama PPK</h6>
                    </div>
                    <div class="col-md-8 col-12 mt-2">
                        <h6 class="font-weight-normal">: {{$survey->ppk == null ? '-' : $survey->ppk}}</h6>
                    </div>

                    <div class="col-12">
                        <h3 class="mt-4">II. DATA TEKNIS</h3>
                    </div>
                        <div class="col-md-4 col-12 mt-2">
                            <h6>1. Tahun anggaran</h6>
                        </div>
                        <div class="col-md-8 col-12 mt-2">
                            <h6 class="font-weight-normal">: {{$survey->tahun_anggaran == null ? '-' : $survey->tahun_anggaran}}</h6>
                        </div>
                        <div class="col-md-4 col-12 mt-2">
                            <h6>2. Cara pelaksanaan</h6>
                        </div>
                        <div class="col-md-8 col-12 mt-2">
                            @if ($survey->cara_pelaksanaan == 0)
                                <h6 class="font-weight-normal">: Swasta</h6>
                            @else
                                <h6 class="font-weight-normal">: Perusahaan</h6>
                            @endif
                        </div>
                    <div class="col-12">
                        <h3 class="mt-4">A. DATA ADMINISTRASI</h3>
                        <div class="row">
                            @php $no = 1; @endphp
                            @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 1)
                                <div class="col-md-4 col-12 mt-2">
                                    <h5>{{$no++}}. {{$selection->selection->title}}</h5>
                                </div>
                                <div class="col-md-8 col-12 mt-2">
                                    @if ($selection->choice == 0)
                                        <h6 class="font-weight-normal">: Tidak Sesuai  ({{$selection->description}})</h6>
                                    @else
                                        <h6 class="font-weight-normal">: Sesuai  ({{$selection->description}})</h6>
                                    @endif

                                </div>
                            @endif
                            @endforeach
                        </div>

                        <h3 class="mt-4">B. DATA KONSTRUKSI</h3>
                        <div class="row">
                            @php $no = 1; @endphp
                            @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 2)
                                <div class="col-md-4 col-12 mt-2">
                                    <h5>{{$no++}}. {{$selection->selection->title}}</h5>
                                </div>
                                <div class="col-md-8 col-12 mt-2">
                                    @if ($selection->choice == 0)
                                        <h6 class="font-weight-normal">: Tidak Sesuai ({{$selection->description}})</h6>
                                    @else
                                        <h6 class="font-weight-normal">: Sesuai  ({{$selection->description}})</h6>
                                    @endif

                                </div>
                            @endif
                            @endforeach
                        </div>

                        <h3 class="mt-4">C. DATA PEMELIHARAAN</h3>

                        <div class="row">
                            @php $no = 1; @endphp
                            @foreach ($survey_selections as $selection)
                            @if ($selection->selection->type == 3)
                                <div class="col-md-4 col-12 mt-2">
                                    <h5>{{$no++}}. {{$selection->selection->title}}</h5>
                                </div>
                                <div class="col-md-8 col-12 mt-2">
                                    @if ($selection->choice == 0)
                                        <h6 class="font-weight-normal">: Tidak Sesuai  ({{$selection->description}})</h6>
                                    @else
                                        <h6 class="font-weight-normal">: Sesuai  ({{$selection->description}})</h6>
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

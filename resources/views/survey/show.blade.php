@extends('layouts.base', ['title' =>'Detail Data Gedung'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <h5>Kode Bangunan :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->kode}}</h5>
                    </div>
                    <div class="col-md-3 col-12">
                        <h5>Tanggal :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->tanggal}}</h5>
                    </div>
                    <div class="col-12">
                        <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <h5>Youtube ID :</h5>
                                </div>
                                <div class="col-md-12 col-12">
                                    <h5>{{$survey->youtube_id}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-12">Foto</div>
                                <div class="col-12">
                                <img height="200" src="{{$survey->foto}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <h2>A. DATA UMUM</h2>
                <div class="row no-gutters mt-3">
                    <div class="col-md-3 col-12">
                        <h5>Nama Gedung :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->nama_gedung}}</h5>
                    </div>
                    <div class="col-md-3 col-12">
                        <h5>Nama Gedung :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->nama_gedung}}</h5>
                    </div>
                    <div class="col-md-3 col-12">
                        <h5>Nama Gedung :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->nama_gedung}}</h5>
                    </div>
                    <div class="col-md-3 col-12">
                        <h5>Nama Gedung :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->nama_gedung}}</h5>
                    </div>
                    <div class="col-md-3 col-12">
                        <h5>Nama Gedung :</h5>
                    </div>
                    <div class="col-md-9 col-12">
                        <h5>{{$survey->nama_gedung}}</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
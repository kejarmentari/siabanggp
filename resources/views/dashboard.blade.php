@extends('layouts.base', ['title' => 'Dashboard'])

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 24rem;">
        <div class="row">
            <div class="col-12 col-md-3 offset-md-2">
                <img src="{{ asset('images/logo.png') }}" alt="logo siabang" class="img-fluid" />
            </div>
            <div class="col-12 col-md-6">
                <h1 class="mt-3">SIABANG GP</h1>
                <h3>Dinas Pekerjaan Umum</h3>
                <h4>Kota Balikpapan</h4>
            </div>
        </div>
    </div>
@endsection

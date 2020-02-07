@extends('layouts.base', ['title' => 'Pengaturan Aplikasi'])

@section('content')
    <form class="forms-sample" method="POST" action="{{ url('pengaturan/'.$setting->id) }}}">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="app_name">Nama Aplikasi</label>
                    <input type="text" class="form-control" name="app_name" id="app_name" value="{{ $setting->app_name }}">
                </div>
                <div class="form-group">
                    <label for="app_full_name">Judul Aplikasi</label>
                    <input type="text" class="form-control" name="app_full_name" id="app_full_name" value="{{ $setting->app_full_name }}">
                </div>
                <div class="form-group">
                    <label for="app_description">Deskripsi Aplikasi</label>
                    <textarea class="form-control" name="app_description" id="app_description" rows="4">{{ $setting->app_description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </form>
@endsection

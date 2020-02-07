@extends('layouts.base', ['title' => 'Profil Pengguna'])

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <form class="forms-sample mb-3" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Data Pengguna</h5>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6">
            <form class="forms-sample" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Ganti Password</h5>
                        <div class="form-group">
                            <label for="old_password">Password Lama</label>
                            <input type="password" class="form-control" name="old_password" id="old_password"  required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" class="form-control" name="password" id="password"  required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Ganti Password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\User;
use Auth;
use Hash;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('setting.index', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $setting->update($request->all());

        return back()->with('success', 'Berhasil mengubah pengaturan aplikasi');
    }

    public function profile()
    {
        $uid  = Auth::user()->id;
        $user = User::findOrFail($uid);

        return view('setting.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $uid  = Auth::user()->id;
        $user = User::findOrFail($uid);

        if ($request->has('old_password')) {
            if (! Hash::check($request->old_password, $user->password)) {
                return back()->with('error', 'Password lama salah.');
            }

            if ($request->password !== $request->password_confirmation) {
                return back()->with('error', 'Konfirmasi password baru tidak sama.');
            }

            $user->update(['password' => Hash::make($request->password)]);

            return back()->with('success', 'Berhasil mengubah password pengguna');
        }

        $user->update($request->all());

        return back()->with('success', 'Berhasil mengubah profil pengguna');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Pasien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Alert;

class AdminController extends Controller
{
    public function index()
    {
        $users = session('data_login');
        return view('admin.index', ['users' => $users]);
    }

    public function login()
    {
        if (session('data_login')) {
            return redirect('/admin');
        }
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        $data_login = Login::where('username', $request->username)->firstOrFail();
        $cek_password = Hash::check($request->password, $data_login->password);
        if ($data_login) {
            if ($cek_password) {
                if ($data_login->level == 1) {
                    $users = session(['data_login' => $data_login]);
                    Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
                    return redirect('/admin');
                }
            }
        }
        return redirect('/login')->with('status_fail', 'Login gagal, username atau password salah')->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }

    public function register()
    {
        if (session('data_login')) {
            return redirect('/admin');
        }
        return view('admin.register');
    }

    public function postregister(Request $request)
    {
        $login_data = new Login;
        $validatedLogin = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required'
        ]);
        $hashPassword = Hash::make($request->password, [
            'rounds' => 12,
        ]);
        $token = Str::random(16);
        $level = 1;
        $login_data = Login::create([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'username' => $request->username,
            'password' => $hashPassword,
            'token' => $token,
            'level' => $level,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $login_data->save();
        return redirect('/login')->with('berhasil_register', 'Berhasil melakukan registrasi');
    }

    public function listpasien()
    {
        return view('admin.pasien.list-pasien');
    }

    public function tambahpasien()
    {
        return view('admin.pasien.tambahpasien');
    }

    public function posttambahpasien(Request $request)
    {
        $validated = $request->validate([
            'gambar' => 'mimes:jpeg,png|max:1014'
        ]);
        $gambar_cek = $request->file('gambar');
        if (!$gambar_cek) {
            $gambar = null;
        }
        $gambar = $request->file('gambar')->store('gambar');
        $newPasien = new Pasien;
        $newPasien = Pasien::create([
            'pasien_judul' => $request->pasien_judul,
            'pasien_nama' => $request->pasien_nama,
            'pasien_kronologi' => $request->pasien_kronologi,
            'gambar' => $gambar,
            'pasien_anakkeberapa' => $request->pasien_anakkeberapa,
            'pasien_jumlahsaudara' => $request->pasien_jumlahsaudara,
            'pasien_namaibu' => $request->pasien_namaibu,
            'pasien_namaayah' => $request->pasien_namaayah,
            'pasien_pekerjaanibu' => $request->pasien_pekerjaanibu,
            'pasien_pekerjaanayah' => $request->pasien_pekerjaanayah,
            'pasien_penanganan' => $request->pasien_penanganan,
            'pasien_harapan' => $request->pasien_harapan,
            'pasien_citacita' => $request->pasien_citacita,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // $newPasien->save();
        dd($newPasien);
        return redirect()->route('tambah-pasien');
    }
}

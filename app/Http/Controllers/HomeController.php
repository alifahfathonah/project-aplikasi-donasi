<?php

namespace App\Http\Controllers;

use App\Pasien;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data_pasien = Pasien::all();
        return view('homepage.index', [
            'data_pasien' => $data_pasien
        ]);
    }

    public function getdetailpasien()
    {
        // $data_pasien = Pasien::where('id', $pasien)->first()->get();
        // dd($data_pasien);
        return view('homepage.detail');
    }

    public function prosesdonasi()
    {
        return view('homepage.proses-donasi');
    }

    public function postprosesdonasi()
    {
        //
    }
}

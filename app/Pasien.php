<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    protected $fillable = [
        'pasien_judul',
        'pasien_nama',
        'pasien_kronologi',
        'gambar',
        'pasien_anakkeberapa',
        'pasien_jumlahsaudara',
        'pasien_pekerjaanayah',
        'pasien_pekerjaanibu',
        'pasien_namaayah',
        'pasien_namaibu',
        'pasien_penanganan',
        'pasien_harapan',
        'pasien_citacita'
    ];

    public function donatur()
    {
        return $this->hasMany('App\Donatur');
    }
}

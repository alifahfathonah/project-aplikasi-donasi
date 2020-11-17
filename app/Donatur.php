<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = 'donatur';

    protected $fillable = [
        'donatur_nama',
        'donatur_namaalias',
        'donatur_nominal',
        'donatur_pesan',
        'donatur_asal',
        'id_pasien'
    ];

    public function pasien()
    {
        return $this->belongsTo('App\Pasien');
    }
}

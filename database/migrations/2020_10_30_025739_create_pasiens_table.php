<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('pasien_nama');
            $table->longText('pasien_kronologi');
            $table->string('pasien_anakkeberapa');
            $table->string('pasien_jumlahsaudara');
            $table->string('pasien_namaibu');
            $table->string('pasien_namaayah');
            $table->string('pasien_pekerjaanibu');
            $table->string('pasien_pekerjaanayah');
            $table->string('pasien_penanganan');
            $table->string('pasien_harapan');
            $table->string('pasien_citacita');
            $table->integer('total_donasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}

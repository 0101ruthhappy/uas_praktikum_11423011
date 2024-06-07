<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiLapanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_lapangan', function (Blueprint $table) {
            $table->id('id_lokasi_lapangan')->length(50);
            $table->integer('id_lapangan')->length(100);
            $table->string('nama_lokasi_lapangan', 100);
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
        Schema::dropIfExists('lokasi_lapangan');
    }
}

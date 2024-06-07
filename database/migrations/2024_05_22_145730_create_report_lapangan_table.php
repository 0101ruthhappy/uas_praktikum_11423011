<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportLapanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_lapangan', function (Blueprint $table) {
            $table->increments('id_report_lapangan');
            $table->integer('id_lapangan')->unsigned();
            $table->integer('id_booking_lapangan')->unsigned();
            $table->bigInteger('total_harga')->unsigned();
            $table->integer('id_user')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_lapangan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       schema::create('pembayaran', function (Blueprint $table) {
          $table->integer('id_pembayaran',11);
          $table->integer('id_petugas',11);
          $table->varchar('nisn',10);
          $table->date('tgl_bayar');
          $table->varchar('bulan_dibayar',8);
          $table->varchar('tahun_dibayar',4);
          $table->integer('id_spp',11);
          $table->integer('jumlah_bayar',11);
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
        //
    }
};

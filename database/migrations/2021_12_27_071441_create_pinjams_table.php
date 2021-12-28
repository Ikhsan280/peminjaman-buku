<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->bigInteger('id_buku');
            $table->bigInteger('anggota_id')->unsigned();
            $table->foreign('anggota_id')
            ->references('id')
            ->on('anggotas');
            $table->bigInteger('petugas_id')->unsigned();
            $table->foreign('petugas_id')
                  ->references('id')
                  ->on('petugas');
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
        Schema::dropIfExists('pinjams');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_pengembalian');
            $table->string('denda');
            $table->integer('jumlah');
            $table->bigInteger('buku_id')->unsigned();
            $table->foreign('buku_id')
                  ->references('id')
                  ->on('bukus');
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
        Schema::dropIfExists('pengembalians');
    }
}

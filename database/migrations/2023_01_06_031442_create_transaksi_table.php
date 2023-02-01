<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_induk_peminjam');
            $table->string('nama_peminjam');
            $table->string('kode_buku');
            $table->string('judul_buku');
            $table->string('penulis_buku');
            $table->string('penerbit_buku');
            $table->string('tahun_terbit');
            $table->string('kategori');
            $table->string('isbn');
            $table->date('tgl_pinjam');
            $table->date('tgl_dikembalikan');
            $table->string('status_pinjam');
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
        Schema::dropIfExists('transaksi');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $fillable = ['nomor_induk_peminjam',
                        'nama_peminjam',
                        'judul_buku',
                        'kode_buku',
                        'penulis_buku',
                        'penerbit_buku',
                        'tahun_terbit',
                        'kategori',
                        'isbn',
                        'tgl_pinjam',
                        'tgl_dikembalikan',
                        'status_pinjam'];
}

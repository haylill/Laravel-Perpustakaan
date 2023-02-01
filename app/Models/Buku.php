<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_buku', 'judul_buku', 'penulis_buku','penerbit_buku','tahun','kategori','isbn','stok_buku','photo'];
}

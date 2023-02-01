<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;
    protected $table = 'ebook';
    protected $primaryKey = 'id';
    protected $fillable = ['judul_ebook', 'penulis_ebook','penerbit_ebook','cover','file'];

}

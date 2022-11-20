<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // Untuk kolom yang dapat diinputkan,
    // agar tidak error saat melakukan post.
    protected $fillable = ['kategori', 'keterangan'];
}

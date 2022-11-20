<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    // Untuk kolom yang tidak dapat diinputkan,
    // agar tidak error saat melakukan post.
    protected $guarded = ['idpelanggan'];
}

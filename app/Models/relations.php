<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relations extends Model
{
    protected $table = 'relations';
    protected $fillable = [
        'produk_nomor_pay',
        'pesanan_nomor_pesan',
        'pembayaran_id_barang',
        'status',

    ];
}

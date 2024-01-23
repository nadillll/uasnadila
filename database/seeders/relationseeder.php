<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class relationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'produk_id_barang' => "9375",
            'pesanan_nomor_pesan' => "846949",
            'pembayaran_nomor_pay' => "499378",
            'status' => "Y",
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class pembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            'nomor_pay' => "499378",
            'jenis' => 'credit',
            'total' => 'Rp.150.000,00',
            'total_barang' => '8',
        ]);

    }
}

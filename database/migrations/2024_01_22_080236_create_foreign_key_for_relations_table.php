<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('produk_id_barang')->references('id_barang')->
            on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pesanan_nomor_pesan')->references('nomor_pesan')->
            on('pesanans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pembayaran_nomor_pay')->references('nomor_pay')->
            on('pembayarans')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relations', function (Blueprint $table) {
    
            $table->dropForeign('relations_produk_id_barang_foreign');
            $table->dropForeign('relations_pesanan_nomor_pesan_foreign');
            $table->dropForeign('relations_pembayaran_nomor_pay_foreign');
    
    
    });
    }
    };

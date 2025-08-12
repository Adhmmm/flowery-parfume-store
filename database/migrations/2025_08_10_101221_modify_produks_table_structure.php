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
        Schema::table('produks', function (Blueprint $table) {
            $table->dropColumn('sku', 'kategori', 'stok');

            $table->string('jenis_aroma', 50)->after('nama');
            $table->decimal('rating_produk', 2, 1)->after('jenis_aroma');
            $table->integer('penjualan')->after('rating_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->string('sku')->after('nama');
            $table->string('kategori')->after('sku');
            $table->integer('stok')->after('kategori');

            $table->dropColumn('jenis_aroma', 'rating_produk', 'penjualan');
        });
    }
};

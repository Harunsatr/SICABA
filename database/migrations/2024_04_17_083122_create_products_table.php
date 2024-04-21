<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique()->nullable();
            $table->string('nama_produk');
            $table->decimal('harga', 8, 2);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });

        // Setiap produk yang sudah ada akan diberikan UUID baru
        \App\Models\Product::all()->each(function ($product) {
            $product->uuid = (string) Str::uuid();
            $product->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

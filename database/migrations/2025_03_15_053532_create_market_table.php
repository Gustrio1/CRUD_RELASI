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
        Schema::create('market', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_market');
            $table->unsignedBigInteger('market_id');
            $table->foreign('market_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market');
    }
};

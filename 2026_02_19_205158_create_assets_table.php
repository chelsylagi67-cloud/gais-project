<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_code')->unique();
            $table->string('name');
            $table->string('category')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->default('available');
            $table->string('serial_number')->nullable();
            $table->date('warranty_expiry')->nullable();

            $table->text('description')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('barcode_path')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
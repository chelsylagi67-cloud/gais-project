<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('requests', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->cascadeOnDelete();
      $table->foreignId('inventory_id')->constrained('inventories')->cascadeOnDelete(); // sesuaikan nama tabel inventory kamu

      $table->unsignedInteger('qty')->default(1);
      $table->enum('status', ['pending','approved','rejected'])->default('pending');
      $table->string('request_code')->unique();
      $table->timestamps();
    });
  }

  public function down(): void {
    Schema::dropIfExists('requests');
  }
};

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
    Schema::table('checklists', function (Blueprint $table) {
        $table->string('activity_name')->after('created_by');
        $table->string('category')->nullable()->after('type');
        $table->string('location')->nullable()->after('category');
        $table->text('description')->nullable()->after('location');
    });
}

public function down(): void
{
    Schema::table('checklists', function (Blueprint $table) {
        $table->dropColumn(['activity_name', 'category', 'location', 'description']);
    });
}
};

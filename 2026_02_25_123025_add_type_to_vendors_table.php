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
    Schema::table('vendors', function (Blueprint $table) {
        $table->string('contact_person')->nullable()->after('vendor_type');
        $table->string('phone')->nullable()->after('contact_person');
        $table->string('email')->nullable()->after('phone');
    });
}

public function down(): void
{
    Schema::table('vendors', function (Blueprint $table) {
        $table->dropColumn('type');
    });
    }
};

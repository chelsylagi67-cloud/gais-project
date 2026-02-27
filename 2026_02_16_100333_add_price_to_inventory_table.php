<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::table('inventories', function (Blueprint $table) {
    if (!Schema::hasColumn('inventories', 'price')) {
        $table->decimal('price', 15, 2)->default(0)->after('stock');
    }
});

    }

    public function down(): void
    {Schema::table('inventories', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    } 
};

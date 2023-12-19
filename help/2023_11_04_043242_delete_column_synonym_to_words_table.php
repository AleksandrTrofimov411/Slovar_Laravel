<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // это тоже самое что и добавить колонку но наоборот

    public function up(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->dropColumn('synonym');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->text('synonym')->after('translate');

        });
    }
};

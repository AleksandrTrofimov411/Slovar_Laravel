<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // эта херня меняет тип данных колонки

    public function up(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->string('translate_in_russian')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->text('translate_in_russian')->change();
        });
    }
};

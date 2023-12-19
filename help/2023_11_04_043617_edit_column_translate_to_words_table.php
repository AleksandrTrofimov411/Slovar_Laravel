<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // эта херня меняет название колонок

    public function up(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->renameColumn('translate', 'translate_in_russian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->renameColumn('translate_in_russian', 'translate');

        });
    }
};

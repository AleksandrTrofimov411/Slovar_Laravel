<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // Это херня нужна для изменений уже созданой таблицы
    // тут я добавляю column synonym
    //так же тут можно дропнуть изменения

    public function up(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->text('synonym')->after('translate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word', function (Blueprint $table) {
//            $table->dropColumn('synonym');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //при  миграции воздает бд с данными полями
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            //айдишка и все что ней связано
            $table->id();
            $table->string('name');
            $table->string('description');
            
            //время создания записи и время обновления
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

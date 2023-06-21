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
        Schema::create('ocr_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nr_inmat');
            $table->string('vehType');
            $table->string('vehMake');
            $table->string('vehModel');
            $table->string('ss')->unique();
            $table->string('lastN');
            $table->string('firstN');
            $table->string('ownerAdd');
            $table->string('lastN2');
            $table->string('firstN2');
            $table->string('ownerAdd2');
            $table->string('first_reg');
            $table->string('max_mass');
            $table->string('cc');
            $table->string('kw');
            $table->string('combust_type');
            $table->string('seats');
            $table->string('reg_series');

            // php artisan migrate --path=/database/migrations/2023_06_14_192152_create_ocr_data_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocr_data');
    }
};

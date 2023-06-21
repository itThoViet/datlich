e:\2023\07-2023\datlich\database\migrations\2023_06_20_025708_create_worker_infomations_table.php<?php

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
        Schema::create('worker_infomations', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name_worker');
            $table->string('img_worker');
            $table->string('code_worker');
            $table->string('year_worker');
            $table->tinyInteger('kind_worker')->default(0);
            $table->string('description_worker');
            $table->boolean('flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_infomations');
    }
};

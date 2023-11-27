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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('group',15)->index();
            $table->string('unit',10)->index();
            $table->string('zone',6)->index();
            $table->unsignedInteger('employee')->index();
            $table->unsignedInteger('years')->index();
            $table->string('name',255);
            $table->enum('status',['pending','registered'])->default('pending')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};

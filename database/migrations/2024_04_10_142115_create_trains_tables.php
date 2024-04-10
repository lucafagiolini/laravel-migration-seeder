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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company');
            $table->string('starting_station');
            $table->string('arriving_station');
            $table->timestamp('departure_time')->nullable();
            $table->timestamp('arriving_time')->nullable();
            $table->string('train_code');
            $table->integer('carriage_number');
            $table->boolean('in_time');
            $table->boolean('is_canceled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};

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
        Schema::create('trains_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda');
            $table->string('Stazione di arrivo');
            $table->timestamp('Orario di partenza')->nullable();
            $table->timestamp('Orario di arrivo')->nullable();
            $table->string('Codice treno');
            $table->integer('Numero Carrozze');
            $table->boolean('In Orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains_tables');
    }
};

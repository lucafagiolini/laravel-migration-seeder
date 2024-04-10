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
            $table->azienda();
            $table->stazione_di_partenza();
            $table->stazione_di_arrivo();
            $table->orario_di_partenza();
            $table->orario_di_arrivo();
            $table->codice_treno();
            $table->numero_di_carrozze();
            $table->in_orario();
            $table->cancelloato();
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

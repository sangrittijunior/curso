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
        Schema::create('consulta', function (Blueprint $table) {
            $table->id();
            $table->integer('medico_id');
            $table->integer('paciente_id');
            $table->integer('user_id');
            $table->integer('problema_id')->nullable()->default(null);
            $table->dateTime('data_hora');
            $table->longText('diagnostico')->nullable()->default(null);
            $table->longText('observacao')->nullable()->default(null);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulta');
    }
};

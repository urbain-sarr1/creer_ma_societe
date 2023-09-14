<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conjoints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('PrenomNom');
            $table->date('DateNaissance');
            $table->string('LieuNaissance');
            $table->string('Nationalite');
            $table->date('DateMariage');
            $table->string('LieuMariage');
            $table->date('DateContratMariage');
            $table->longText('NomResidentNotaire');
            $table->string('RegimeMatrimoniale');
            $table->unsignedBigInteger('associe_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conjoints');
    }
};

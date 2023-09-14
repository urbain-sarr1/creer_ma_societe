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
        Schema::create('associes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('DateNaissance');
            $table->string('LieuNaissance');
            $table->string('Nationalite');
            $table->string('Profession');
            $table->string('CNI');
            $table->date('DateDelivrance');
            $table->date('DateExpiration');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string('PieceIdentite');
            $table->string('SituationMatrimoniale');
            $table->unsignedBigInteger('societe_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associes');
    }
};

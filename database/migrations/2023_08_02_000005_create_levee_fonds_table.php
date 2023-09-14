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
        Schema::create('levee_fonds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('DescriptionProjet');
            $table->longText('EtatAvancement');
            $table->longText('BesoinFinancement');
            $table->longText('ModaliteRemboursement');
            $table->longText('Garanties');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levee_fonds');
    }
};

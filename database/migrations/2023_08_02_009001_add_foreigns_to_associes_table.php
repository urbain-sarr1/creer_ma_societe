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
        Schema::table('associes', function (Blueprint $table) {
            $table
                ->foreign('societe_id')
                ->references('id')
                ->on('societes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('associes', function (Blueprint $table) {
            $table->dropForeign(['societe_id']);
        });
    }
};

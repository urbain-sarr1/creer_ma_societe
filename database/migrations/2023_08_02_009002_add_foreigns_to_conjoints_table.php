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
        Schema::table('conjoints', function (Blueprint $table) {
            $table
                ->foreign('associe_id')
                ->references('id')
                ->on('associes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conjoints', function (Blueprint $table) {
            $table->dropForeign(['associe_id']);
        });
    }
};

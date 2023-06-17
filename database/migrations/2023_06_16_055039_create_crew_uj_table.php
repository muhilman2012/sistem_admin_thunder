<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('crew_uj', function (Blueprint $table) {
            $table->foreignId('crew_id')->constrained('crew', 'crew_id')->onDelete('cascade');
            $table->foreignId('uj_id')->constrained('uj', 'uj_id')->onDelete('cascade');
            $table->primary(['crew_id', 'uj_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('crew_uj');
    }
};

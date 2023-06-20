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
            $table->unsignedBigInteger('crew_id');
            $table->unsignedBigInteger('uj_id');
            $table->foreign('crew_id')->references('crew_id')->on('crew')->onDelete('cascade');
            $table->foreign('uj_id')->references('uj_id')->on('uj')->onDelete('cascade');
            $table->timestamps();
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

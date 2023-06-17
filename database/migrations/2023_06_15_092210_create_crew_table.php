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
        Schema::create('crew', function (Blueprint $table) {
            $table->id('crew_id');
            $table->string('nama_crew');
            $table->string('divisi_crew');
            $table->decimal('nominal_fee', 8, 2);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('crew');
    }
};

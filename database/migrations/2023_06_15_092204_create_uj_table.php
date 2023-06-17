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
        Schema::create('uj', function (Blueprint $table) {
            $table->id('uj_id');
            $table->string('nama_event');
            $table->string('venue');
            $table->date('tanggal_show');
            $table->decimal('fee_pic', 8, 2)->nullable();
            $table->decimal('fee_operator', 8, 2)->nullable();
            $table->decimal('fee_transport', 8, 2)->nullable();
            $table->decimal('total_uang_jalan', 8, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('uj');
    }
};
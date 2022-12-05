<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante1s', function (Blueprint $table) {
            $table->id();
            $table->string('codEst');
            $table->string('nomEst');
            $table->string('apeEst');
            $table->date('fnaEst');
            $table->integer('turMat');
            $table->integer('semMat');
            $table->integer('estMat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante1s');
    }
};

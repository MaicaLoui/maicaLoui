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
        Schema::create('bodices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->unique();

            $table->decimal('bust', 4, 1)->nullable();
            $table->decimal('back_length', 4, 1)->nullable();
            $table->decimal('back_width', 4, 1)->nullable();
            $table->decimal('shoulder', 4, 1)->nullable();
            $table->decimal('bodice_waist', 4, 1)->nullable();
            $table->decimal('bodice_hip', 4, 1)->nullable();
            $table->decimal('body_rise', 4, 1)->nullable();
            $table->decimal('bust_to_bust', 4, 1)->nullable();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('bodices');
    }
};

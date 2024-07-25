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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            //$table->integer('skirt_id');
            // $table->unsignedBigInteger('skirt_id')->unique();
            // $table->foreign('skirt_id')->references('id')->on('skirts')->onDelete('cascade');
            $table->string('name');
            $table->string('gender');
            $table->bigInteger('has_skirt');
            $table->bigInteger('has_bodice');

            //$table->foreign('skirt_id')->references('id')->on('skirts')->onDelete('cascade');
            $table->timestamps();
            // $table->foreign('skirt_id')
            //     ->references('id')
            //     ->on('skirts')
            //     ->onDelete('cascade');

            // $table ->whereExists(function ($query) {
            //     $query->select(DB::raw(1))
            //           ->from('posts')
            //           ->whereRaw('posts.client_id = clients.id');
            // })
            // ->update(['has_posts' => 1]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};

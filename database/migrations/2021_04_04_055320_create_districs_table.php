<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('divishion_id');
            $table->foreign('divishion_id')->references('id')->on('divishions')->onDelete('cascade');
            $table->unsignedBigInteger('romadan_id');
            $table->foreign('romadan_id')->references('id')->on('romadans')->onDelete('cascade');
            $table->integer('sahri');
            $table->integer('iftar');
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
        Schema::dropIfExists('districs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->unsigned()->unique();
            $table->integer('model')->unsigned()->nullable();
            $table->foreign('model')->references('model')->on('products');
            $table->integer('speed')->unsigned()->nullable();
            $table->integer('ram')->unsigned()->nullable();
            $table->integer('hd')->unsigned()->nullable();
            $table->string('cd', '100')->nullable();
            $table->integer('price')->unsigned()->nullable();
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
        Schema::dropIfExists('pcs');
    }
}

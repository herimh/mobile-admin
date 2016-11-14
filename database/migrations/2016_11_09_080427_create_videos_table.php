<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 255);
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('order')->nullable();
            $table->integer('menu_item_id')->unsigned();
            $table->foreign('menu_item_id')->references('id')->on('menu_items');
            $table->enum('visible_for', ['client', 'partner']);
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
        //
    }
}

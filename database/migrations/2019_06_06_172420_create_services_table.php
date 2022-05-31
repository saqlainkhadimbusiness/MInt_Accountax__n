<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('heading_id');
            $table->string('slug')->unique()->nullable();
            $table->string('title');
            $table->longText('body');
            $table->integer('price');
            $table->integer('price1')->nullable();
            $table->integer('price2')->nullable();
            $table->longText('meta_description');
            $table->longText('keywords_content');
            $table->string('meta_keywords');
            $table->integer('rank')->default(0);
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
        Schema::dropIfExists('services');
    }
}

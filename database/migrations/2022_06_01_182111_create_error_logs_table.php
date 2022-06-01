<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('error_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status',['new','fix','ignore','modifying']);
            $table->string('previous_url');
            $table->string('current_url');
            $table->text('request_params');
            $table->longText('error_msg');
            $table->longText('error_trace');
            $table->string('device');
            $table->string('browser');
            $table->longText('platform');
            $table->longText('user_agent');
            $table->string('error_code');
            $table->string('error_type');
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
        Schema::dropIfExists('error_logs');
    }
}

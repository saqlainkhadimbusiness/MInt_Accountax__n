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
            $table->enum('status',['new','fixed','informed','ignore'])->default('new');
            $table->text('previous_url');
            $table->text('current_url');
            $table->text('request_params');
            $table->text('error_msg');
            $table->longText('error_trace');
            $table->string('device');
            $table->string('browser');
            $table->string('user_agent');
            $table->string('platform');
            $table->enum('error_type',['maximum_execution_time','allowed_memory','queue','api','general']);
            $table->string('error_code')->nullable();
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

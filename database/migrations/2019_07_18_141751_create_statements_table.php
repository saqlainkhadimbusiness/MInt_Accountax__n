<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('bank_id');
            $table->date('date');
            $table->string('type');
            $table->string('details');
            $table->string('payee')->nullable();
            $table->string('description');
            $table->float('net', 8, 2);
            $table->float('vat', 8, 2)->default(0);
            $table->float('total', 8, 2);
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
        Schema::dropIfExists('statements');
    }
}

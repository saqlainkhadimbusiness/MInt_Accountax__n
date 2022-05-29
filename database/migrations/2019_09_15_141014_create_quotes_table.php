<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('turnover');
            $table->string('email');
            $table->boolean('vat_returns');
            $table->string('number');
            $table->string('payroll');
            $table->string('business_type');
            $table->boolean('bookkeeping');
            $table->numeric('employees')->nullable();
            $table->numeric('transactions')->nullable();
            $table->numeric('partners')->nullable();
            $table->boolean('dormant')->nullable();
            $table->boolean('not_trading')->nullable();
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
        Schema::dropIfExists('quotes');
    }
}

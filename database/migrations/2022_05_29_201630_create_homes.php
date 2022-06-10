<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_title')->nullable();
            $table->text('meta_title_desc')->nullable();
            $table->text('slider_text_1')->nullable();
            $table->text('slider_text_2')->nullable();
            $table->text('slider_text_3')->nullable();
            $table->text('services_heading')->nullable();
            $table->text('services_desc')->nullable();
            $table->string('services_icon_1')->nullable();
            $table->string('services_heading_1')->nullable();
            $table->string('services_slug_1')->nullable();
            $table->string('services_desc_1')->nullable();
            $table->string('services_icon_2')->nullable();
            $table->string('services_heading_2')->nullable();
            $table->string('services_slug_2')->nullable();
            $table->string('services_desc_2')->nullable();
            $table->string('services_icon_3')->nullable();
            $table->string('services_heading_3')->nullable();
            $table->string('services_slug_3')->nullable();
            $table->string('services_desc_3')->nullable();
            $table->string('services_icon_4')->nullable();
            $table->string('services_heading_4')->nullable();
            $table->string('services_slug_4')->nullable();
            $table->string('services_desc_4')->nullable();
            $table->string('services_icon_5')->nullable();
            $table->string('services_heading_5')->nullable();
            $table->string('services_slug_5')->nullable();
            $table->string('services_desc_5')->nullable();
            $table->string('services_icon_6')->nullable();
            $table->string('services_heading_6')->nullable();
            $table->string('services_slug_6')->nullable();
            $table->string('services_desc_6')->nullable();
            $table->string('company_heading')->nullable();
            $table->text('company_heading_desc')->nullable();
            $table->string('company_image')->nullable();
            $table->string('company_image_alt')->nullable();
            $table->text('company_desc')->nullable();
            $table->string('company_item_1')->nullable();
            $table->string('company_item_per_1')->nullable();
            $table->string('company_item_2')->nullable();
            $table->string('company_item_per_2')->nullable();
            $table->string('success_heading')->nullable();
            $table->text('success_heading_desc')->nullable();
            $table->string('success_head_1')->nullable();
            $table->text('success_head_desc_1')->nullable();
            $table->string('success_head_2')->nullable();
            $table->text('success_head_desc_2')->nullable();
            $table->string('success_head_3')->nullable();
            $table->text('success_head_desc_3')->nullable();
            $table->string('success_head_4')->nullable();
            $table->text('success_head_desc_4')->nullable();
            $table->string('success_head_5')->nullable();
            $table->text('success_head_desc_5')->nullable();
            $table->string('success_head_6')->nullable();
            $table->text('success_head_desc_6')->nullable();
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
        Schema::dropIfExists('homes');
    }
}

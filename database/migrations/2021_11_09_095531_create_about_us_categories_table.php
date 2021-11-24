<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name',100)->comment('Category name of About US.');
            $table->text('about_description')->comment('Description of about.');
            $table->text('about_path')->comment('Path of image of about us category.');
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
        Schema::dropIfExists('about_us_categories');
    }
}

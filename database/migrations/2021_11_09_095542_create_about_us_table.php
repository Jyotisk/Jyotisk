<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('about_us_category_id')->index()->unsigned();
            $table->string('about_title',100)->comment('Title for description of about MAC.');
            $table->text('title_description')->comment('Description of title of About MAC');
            $table->timestamps();
            $table->foreign('about_us_category_id')->references('id')->on('about_us_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}

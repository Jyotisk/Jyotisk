<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScopeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scope_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scope_category_id')->unsigned()->index()->comment("images related to a scope category");
            $table->text('scope_image')->comment("image path of a scope image");
            $table->foreign('scope_category_id')->references('id')->on('scope_categories');
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
        Schema::dropIfExists('scope_images');
    }
}

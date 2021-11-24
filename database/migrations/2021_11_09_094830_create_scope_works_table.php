<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScopeWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scope_works', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scope_category_id')->index()->unsigned();
            $table->text('scope_description');
            $table->timestamps();
            $table->foreign('scope_category_id')->references('id')->on('scope_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scope_works');
    }
}

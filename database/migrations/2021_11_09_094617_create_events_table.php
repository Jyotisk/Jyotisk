<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_category_id')->index()->unsigned()->comment('Category of a event.');
            $table->string('event_title',100)->comment('Title of a event');
            $table->text('event_description')->comment('Description of a event');
            $table->text('event_path')->nullable()->comment('Document related to a event');
            $table->timestamps();
            
        });

        schema::table('events', function (Blueprint $table) {
            $table->foreign('event_category_id')->references('id')->on('event_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

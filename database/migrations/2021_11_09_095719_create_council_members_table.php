<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouncilMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('council_members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('council_designation_id')->index()->unsigned()->comment('Designatio of a member of MAC');
            $table->string('mobile_no',10)->unique()->comment('Mobile no. of a council member');
            $table->string('email',100)->unique()->comment('Email of a council member');
            $table->text('address')->comment('Address of a council member of MAC.');
            $table->timestamps();
            $table->foreign('council_designation_id')->references('id')->on('council_designations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('council_members');
    }
}

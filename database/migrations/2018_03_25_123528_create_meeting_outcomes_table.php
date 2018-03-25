<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_outcomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description'); //Pitch Accepted
            $table->timestamps();
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->unsignedInteger('meeting_outcome_id')->nullable();
            $table->foreign('meeting_outcome_id')->references('id')->on('meeting_outcomes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_outcomes');
    }
}

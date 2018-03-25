<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description'); //progress meeting, initial pitch,  presentation
            $table->timestamps();
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->unsignedInteger('meeting_type_id')->nullable();
            $table->foreign('meeting_type_id')->references('id')->on('meeting_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_types');
    }
}

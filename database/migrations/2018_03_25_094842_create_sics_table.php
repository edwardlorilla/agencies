<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->timestamps();
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedInteger('sic_id')->nullable();
            $table->foreign('sic_id')->references('id')->on('sics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sics');
    }
}

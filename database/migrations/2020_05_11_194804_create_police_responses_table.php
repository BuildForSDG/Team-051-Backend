<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliceResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police_responses', function (Blueprint $table) {
            $table->id();
            $table->integer('road_id');
            $table->integer('trip_id');
            $table->integer('user_id');
            $table->integer('incident_id');
            $table->enum('status', ['saved','rescue','assisting']);
            $table->text('description');
            $table->timestamps(); $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('police_responses');
    }
}

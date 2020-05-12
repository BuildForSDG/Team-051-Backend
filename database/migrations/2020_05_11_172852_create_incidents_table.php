<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->integer('road_id');
            $table->integer('trip_id');
            $table->dateTime('datetime');
            $table->double('longitude');
            $table->double('latitude');
            $table->integer('fatalities');
            $table->integer('casualties');
            $table->enum('status', ['ongoing','over']);
            $table->integer('incidentable_id');
            $table->string('incidentable_type');
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
        Schema::dropIfExists('incidents');
    }
}

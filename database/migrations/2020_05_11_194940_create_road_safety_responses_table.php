<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadSafetyResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_safety_responses', function (Blueprint $table) {
            $table->id();
            $table->integer('road_id');
            $table->integer('trip_id');
            $table->integer('user_id');
            $table->integer('incident_id');
            $table->enum('status', ['saved','on-site','helping','helped','rescue','first aid','safe','completed']);
            $table->text('description');
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
        Schema::dropIfExists('road_safety_responses');
    }
}

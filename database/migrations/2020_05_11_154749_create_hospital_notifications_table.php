<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('hospital_id');
            $table->integer('channel_id');
            $table->integer('incidentable_id');
            $table->string('incidentable_type');
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
        Schema::dropIfExists('hospital_notifications');
    }
}

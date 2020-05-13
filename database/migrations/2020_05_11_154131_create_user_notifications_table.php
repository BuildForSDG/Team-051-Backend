<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); $table->softDeletes();
            $table->integer('user_id')->unsigned();
            $table->integer('channel_id');
            $table->integer('incidentable_id');
            $table->string('incidentable_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_notifications');
    }
}

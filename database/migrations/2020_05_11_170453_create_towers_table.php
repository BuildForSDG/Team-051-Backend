<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Utils\Schema;

class CreateTowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towers', function (Blueprint $table) {
            $table->id();
            $table->integer('state_id');
            $table->integer('lga_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->double('longitude');
            $table->double('latitude');
            $table->boolean('trusted');
            $table->boolean('verified');
            $table->integer('total_calls')->default(0);
            $table->integer('total_response')->default(0);
            $table->integer('total_success')->default(0);
            $table->integer('total_fails')->default(0);
            $table->integer('rating')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('towers');
    }
}

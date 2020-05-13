<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso');
            $table->string('iso3');
            $table->string('name');
            $table->enum('status',['disabled','enabled']);
            $table->text('description');
            $table->string('fips');
            $table->string('continent');
            $table->string('currency_code');
            $table->string('currency_name');
            $table->string('phone_prefix');
            $table->string('postal_code');
            $table->string('language');
            $table->string('geonameid');
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
        Schema::dropIfExists('countries');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Utils\Schema;

class CreateKidnappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kidnappings', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['fatal','minor']);
            $table->enum('status', ['ongoing','over']);
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
        Schema::dropIfExists('kidnappings');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cells', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk');

            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);

            $table->string('title', 50);
            $table->text('description');
            $table->string('nameResponsable', 50)->nullable();
            $table->string('phoneResponsable', 50)->nullable();
            $table->string('lat', 20)->nullable();
            $table->string('long', 20)->nullable();
            $table->string('avatar', 100)->nullable();


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
        Schema::dropIfExists('cells');
    }
}

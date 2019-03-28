<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk');

            $table->boolean('haveInscription')->default(false);
            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);

            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('title', 50);
            $table->string('description', 200)->nullable();
            $table->string('color', 50);
            $table->string('location', 50)->nullable();
            $table->string('nameResponsable', 50)->nullable();
            $table->string('phoneResponsable', 50)->nullable();
            $table->decimal('value', 10,2)->nullable();

            $table->string('hash', 50)->nullable();

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
        Schema::dropIfExists('events');
    }
}

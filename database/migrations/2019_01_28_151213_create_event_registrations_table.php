<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk');
            $table->integer('idEvent_fk');

            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);
            $table->boolean('isPaid')->default(false);

            $table->string('name', 50);
            $table->date('birth')->nullable();
            $table->string('sex', 20)->nullable();
            $table->string('email', 50)->unique();
            $table->string('phone', 50)->nullable();

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
        Schema::dropIfExists('event_registrations');
    }
}

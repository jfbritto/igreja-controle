<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk');
            $table->integer('idUser_fk');
            $table->integer('isOpen')->default(true);
            $table->integer('isRead')->default(false);
            
            $table->string('subject', 100)->nullable();
            $table->text('message')->nullable();
            $table->string('type', 50);
            $table->text('answer')->nullable();
            $table->dateTime('answerDate')->nullable();

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
        Schema::dropIfExists('supports');
    }
}

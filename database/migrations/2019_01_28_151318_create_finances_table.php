<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk');
            $table->integer('idUser_fk');
            $table->integer('idAction_fk');

            $table->text('comments')->nullable();
            $table->string('type', 50);
            $table->decimal('value', 10,2)->nullable();
            $table->date('movimentationDate')->nullable();
            
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
        Schema::dropIfExists('finances');
    }
}

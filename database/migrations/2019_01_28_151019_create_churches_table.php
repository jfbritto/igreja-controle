<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idAddress_fk')->nullable();

            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);

            $table->string('name', 50);
            $table->string('email', 50)->unique();
            $table->string('cnpj', 30);
            $table->string('phone', 50)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->string('hash', 100)->nullable();
            $table->string('lat', 20)->nullable();
            $table->string('long', 20)->nullable();
            $table->text('site_url')->nullable();

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
        Schema::dropIfExists('churches');
    }
}

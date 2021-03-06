<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk')->nullable();
            $table->integer('idAddress_fk')->nullable();

            $table->boolean('isAdmin')->default(false);
            $table->boolean('isMember')->default(false);
            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);
            $table->boolean('isPendent')->default(false);

            $table->string('name', 50);
            $table->date('birth')->nullable();
            $table->string('sex', 20)->nullable();
            $table->string('email', 50)->unique();
            $table->string('password', 60)->default('$2y$10$1OYGSQJWOw9ORQUVQL0ZGu/JML3G/f6wLVad6NC0ylG7B3OsP4YkO');
            $table->string('cpf', 20);
            $table->string('phone', 50)->nullable();
            $table->string('avatar', 100)->nullable();


            $table->string('remember_token', 100)->nullable();
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
        Schema::dropIfExists('users');
    }
}



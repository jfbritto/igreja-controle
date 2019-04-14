<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_folders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idChurch_fk');

            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);

            $table->string('name', 50);
            $table->text('description');

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
        Schema::dropIfExists('doc_folders');
    }
}

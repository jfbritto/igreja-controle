<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_files', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idFolder_fk');

            $table->boolean('isActive')->default(true);
            $table->boolean('isDeleted')->default(false);

            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->string('file_name', 100)->nullable();
            $table->string('file_size', 50)->nullable();

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
        Schema::dropIfExists('doc_files');
    }
}

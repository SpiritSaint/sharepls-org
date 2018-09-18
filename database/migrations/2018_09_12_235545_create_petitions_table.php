<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('petitions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('resource_id');

            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('resource_id')->references('id')->on('resources');

            $table->text('message');
            foreach (['viewed', 'accepted', 'refused', 'declined'] as $column) {
                $table->boolean($column);
                $table->timestamp($column . '_at')->nullable();
            }
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
        Schema::dropIfExists('petitions');
    }
}

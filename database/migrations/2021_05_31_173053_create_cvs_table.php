<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('birthdate');
            $table->integer('age');
            $table->string('nationality');
            $table->string('region');
            $table->string('address');
            $table->string('gender');
            $table->string('marital');
            $table->string('military');
            $table->string('driver_license');
            $table->string('driver_license_category')->nullable();
            $table->string('linkedin')->nullable();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('cvs');
    }
}

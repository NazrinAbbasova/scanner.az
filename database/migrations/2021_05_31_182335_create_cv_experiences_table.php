<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_id');
            $table->string('company')->nullable();
            $table->string('function')->nullable();
            $table->string('function_employment_duration')->nullable();
            $table->string('field')->nullable();
            $table->string('field_employment_duration')->nullable();
            $table->string('position')->nullable();
            $table->string('position_employment_duration')->nullable();
            $table->string('employment_date')->nullable();
            $table->string('unemployment_date')->nullable();
            $table->text('obligations')->nullable();
            $table->timestamps();

            $table->foreign('cv_id')
                    ->references('id')
                    ->on('cvs')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_experiences');
    }
}

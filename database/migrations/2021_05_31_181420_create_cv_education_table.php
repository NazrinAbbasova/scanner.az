<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_id');
            $table->string('education');
            $table->integer('exam_score')->nullable();
            $table->string('university')->nullable();
            $table->string('specialty')->nullable();
            $table->string('profession')->nullable();
            $table->integer('admission_year')->nullable();
            $table->integer('graduation_year')->nullable();
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
        Schema::dropIfExists('cv_education');
    }
}

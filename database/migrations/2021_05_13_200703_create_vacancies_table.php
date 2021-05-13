<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->integer('age_importance');
            $table->string('nationality');
            $table->integer('nationality_importance');
            $table->string('gender');
            $table->integer('gender_importance');
            $table->string('military');
            $table->integer('military_importance');
            $table->string('driver_license');
            $table->integer('driver_license_importance');
            $table->string('driver_license_category');
            $table->integer('driver_license_category_importance');
            $table->string('education');
            $table->integer('education_importance');
            $table->integer('exam_score');
            $table->integer('exam_score_importance');
            $table->string('field');
            $table->integer('field_ineteger');
            $table->string('profession');
            $table->string('experience');
            $table->integer('experience_importance');
            $table->string('function');
            $table->integer('function_importance');
            $table->string('job_role');
            $table->integer('job_role_importance');
            $table->text('obligations');
            $table->string('employment_duration');
            $table->integer('employment_duration_importance');
            $table->boolean('isActive')->default(1);
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
        Schema::dropIfExists('vacancies');
    }
}

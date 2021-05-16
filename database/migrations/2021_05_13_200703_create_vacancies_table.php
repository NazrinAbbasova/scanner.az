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
            $table->unsignedBigInteger('company_id');
            $table->string('age')->nullable();
            $table->integer('age_importance');
            $table->string('nationality')->nullable();
            $table->integer('nationality_importance');
            $table->string('gender')->nullable();
            $table->integer('gender_importance');
            $table->string('military')->nullable();
            $table->integer('military_importance');
            $table->string('driver_license')->nullable();
            $table->integer('driver_license_importance');
            $table->string('driver_license_category')->nullable();
            $table->integer('driver_license_category_importance');
            $table->string('education')->nullable();
            $table->integer('education_importance');
            $table->string('exam_score')->nullable();
            $table->integer('exam_score_importance');
            $table->string('field')->nullable();
            $table->integer('field_importance');
            $table->string('experience')->nullable();
            $table->integer('experience_importance');
            $table->string('function')->nullable();
            $table->integer('function_importance');
            $table->string('position')->nullable();
            $table->integer('position_importance');
            $table->string('employment_duration')->nullable();
            $table->integer('employment_duration_importance');
            $table->string('salary_expectation');
            $table->boolean('isActive')->default(1);
            $table->boolean('send_resumes')->default(0);
            $table->timestamps();

            $table->foreign('company_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('vacancies');
    }
}

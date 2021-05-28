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
            $table->string('title');
            $table->text('description');
            $table->text('obligations');
            $table->text('guarantees');

            $table->integer('age_importance');
            $table->integer('min_age')->nullable();
            $table->integer('max_age')->nullable();
            $table->integer('nationality_importance');
            $table->string('nationality')->nullable();
            $table->integer('region_importance');
            $table->string('region')->nullable();
            $table->integer('gender_importance');
            $table->string('gender')->nullable();
            $table->integer('marital_importance');
            $table->string('marital')->nullable();
            $table->integer('military_importance');
            $table->string('military')->nullable();
            $table->integer('driver_license_importance');
            $table->string('driver_license')->nullable();
            $table->string('driver_license_category')->nullable();

            $table->integer('education_importance');
            $table->string('education')->nullable();
            $table->integer('exam_score_importance');
            $table->string('exam_score')->nullable();
            $table->integer('field_importance');
            $table->string('field_employment_duration')->nullable();
            $table->string('field')->nullable();
            $table->integer('function_importance');
            $table->string('function')->nullable();
            $table->string('function_employment_duration')->nullable();
            $table->integer('position_importance');
            $table->string('position')->nullable();
            $table->string('position_employment_duration')->nullable();
            
            $table->string('min_salary_expectation')->nullable();
            $table->string('max_salary_expectation')->nullable();
            $table->string('expiration_date')->nullable();
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

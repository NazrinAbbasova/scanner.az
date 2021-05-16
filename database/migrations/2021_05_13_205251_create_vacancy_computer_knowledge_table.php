<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyComputerKnowledgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_computer_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id');
            $table->unsignedBigInteger('computer_skill_id');
            $table->string('level');
            $table->integer('importance');
            $table->timestamps();

            // $table->foreign('vacancy_id')
            //         ->references('id')
            //         ->on('vacancies')
            //         ->onDelete('cascade');

            // $table->foreign('computer_skill_id')
            //         ->references('id')
            //         ->on('computer_skills')
            //         ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancy_computer_skills');
    }
}

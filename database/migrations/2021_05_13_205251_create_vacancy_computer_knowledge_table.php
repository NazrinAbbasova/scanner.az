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
        Schema::create('vacancy_computer_knowledge', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id');
            $table->string('computer_knowledge');
            $table->string('computer_knowledge_level');
            $table->integer('computer_knowledge_importance');
            $table->timestamps();

            $table->foreign('vacancy_id')
                    ->references('id')
                    ->on('vacancies')
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
        Schema::dropIfExists('vacancy_computer_knowledge');
    }
}

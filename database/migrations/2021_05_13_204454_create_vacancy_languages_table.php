<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_languages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id');
            $table->unsignedBigInteger('language_id');
            $table->string('level');
            $table->integer('importance');
            $table->timestamps();


            $table->foreign('vacancy_id')
                    ->references('id')
                    ->on('vacancies')
                    ->onDelete('set null');

            $table->foreign('language_id')
                    ->references('id')
                    ->on('language')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancy_languages');
    }
}

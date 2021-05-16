<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id');
            $table->unsignedBigInteger('certificate_id');
            $table->string('level');
            $table->integer('importance');
            $table->timestamps();

            // $table->foreign('vacancy_id')
            //         ->references('id')
            //         ->on('vacancies')
            //         ->onDelete('cascade');

            // $table->foreign('certificate_id')
            //         ->references('id')
            //         ->on('certificates')
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
        Schema::dropIfExists('vacancy_certificates');
    }
}

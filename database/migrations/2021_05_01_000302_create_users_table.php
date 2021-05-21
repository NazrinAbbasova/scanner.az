<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Applicant
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('photo')->nullable();

            // Company
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->string('field')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('phone')->nullable();
            $table->text('success_email')->nullable();
            $table->text('fail_email')->nullable();
            $table->boolean('premium')->nullable()->default(0);

            // Common
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

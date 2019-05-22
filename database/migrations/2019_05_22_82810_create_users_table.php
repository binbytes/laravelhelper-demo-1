<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('base_salary')->default(0)->nullable();
            $table->date('joining_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->string('address')->nullable();
            $table->string('skype')->nullable();
            $table->string('slack')->nullable();
            $table->string('remarks', 3000)->nullable();
            $table->string('trello')->nullable();
            $table->string('linkedin')->nullable();
            $table->boolean('is_active')->default(0);
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

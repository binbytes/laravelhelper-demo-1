<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name')->unique();
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('name_on_account');
            $table->string('branch_of')->nullable();
            $table->string('address')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('contact_number')->nullable();
            $table->integer('statement_starting_line')->default(1);
            $table->timestamps();
            
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('accounts');
    }
}

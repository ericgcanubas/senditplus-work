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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('company');
            $table->string('contact_no');
            $table->string('street_address');
            $table->string('city');
            $table->string('country');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('zipcode')->nullable()->default(0);
            $table->smallInteger('subscription_type')->nullable()->default(1);
            $table->smallInteger('status')->nullable()->default(1);
            $table->string('username');
            $table->string('password');
            $table->string('avatar')->default('default.jpg');
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

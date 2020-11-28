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
            $table->string('name',128);
            $table->string('email',128)->unique();
            $table->string('phone_number',32)->unique();
            $table->string('password',128);
            $table->bigInteger('password_pints')->default(0);
            $table->tinyInteger('email_verified')->default(0);
            $table->date('email_verified_at')->nullable(0);
            $table->string('email_verified_token',88)->nullable(0);
            $table->string('facebook_id',32);
            $table->string('google_id',32);
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

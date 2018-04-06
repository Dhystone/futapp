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
            $table->string('original_email',100)->unique()->nullable();
            $table->string('email',100)->unique()->nullable();
            $table->string('phone',30)->unique()->nullable();
            
            $table->string('password',60)->nullable();
            $table->string('first_type_account', 20)->default('local');
            $table->string('role', 100)->default('player');
            $table->boolean('active')->default(true);
            $table->boolean('verified')->default(false);
            $table->string('avatar_url')->nullable();
            $table->string('active_avatar',20)->nullable();
            
            $table->integer('login_number')->default(0);
            $table->boolean('must_relogin')->default(false);
            $table->dateTime('must_relogin_at')->nullable();
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

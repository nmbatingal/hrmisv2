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
            $table->uuid('id')->primary();
            $table->string('username', 25)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('firstname');
            $table->string('middlename', 100)->nullable();
            $table->string('lastname', 100);
            $table->boolean('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->unique();
            $table->string('mobile_number')->nullable();
            $table->integer('office_id')->unsigned()->nullable();
            $table->string('position')->nullable();
            $table->boolean('_isActive')->default(0);
            $table->boolean('_isAdmin')->default(0);
            $table->string('_img')->default('img/users/user-icon.png');
            $table->timestamps();
            $table->softDeletes();
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

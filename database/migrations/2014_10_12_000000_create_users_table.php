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
            $table->integer('id')->index()->unique()->unsigned();
            $table->integer('cpf')->unique();
            $table->date('nasc');
            $table->string('institution');
            $table->enum('sex', ['M', 'F']);
            $table->enum('type', [0, 1, 2]);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE users CHANGE cpf cpf INT(11) UNSIGNED ZEROFILL NOT NULL');
        DB::statement('ALTER TABLE users CHANGE id id INT(10)AUTO_INCREMENT');
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

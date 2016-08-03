<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('password', 64);
			$table->string('email', 50);
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('phone_number', 50);
            $table->Text('address', 100)->nullable();
            $table->timestamp('last_login');
            $table->string('picture_url');
			$table->enum('isAdmin', array(0, 1))->default(0);
			$table->enum('isSeller', array(0, 1))->default(0);
            $table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}

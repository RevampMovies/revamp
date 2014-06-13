<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			// impostazioni base
			$table->string('id', 8)->primary();
            $table->string('username', 128);
            $table->string('password', 64);
            $table->string('role', 128); 
            $table->string('email', 128);
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
		//Schema::table('users', function(Blueprint $table)
		//{
		//	//
		//});
		
		Schema::drop('users');
	}

}

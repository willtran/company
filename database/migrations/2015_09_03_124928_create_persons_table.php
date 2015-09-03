<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create Person table
	  Schema::create('persons', function(Blueprint $table)
	  {
		$table->increments('id');
		$table->unsignedInteger('company_id');
		$table->string('first_name');
		$table->string('last_name');
		$table->date('dob');
		$table->string('phone_number');
		$table->string('email');
		$table->timestamps();
		$table->foreign('company_id')->references('id')->on('companies');
	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop table persons
	  Schema::drop('persons');
	}

}

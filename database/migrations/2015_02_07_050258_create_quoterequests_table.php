<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoterequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quoterequests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contact_person');
			$table->string('email');
			$table->string('country');
			$table->string('phone');
			$table->text('message_body');
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
		Schema::drop('quoterequests');
	}

}

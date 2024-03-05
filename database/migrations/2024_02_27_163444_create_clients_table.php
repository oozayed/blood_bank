<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('phone');
			$table->string('password');
			$table->date('d_o_b');
			$table->integer('blood_type_id')->unsigned();
			$table->date('last_donation_date')->nullable();
			$table->integer('city_id')->unsigned();
			$table->string('pin_code');
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}

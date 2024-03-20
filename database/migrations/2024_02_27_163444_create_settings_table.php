<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('general', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('key');
			$table->longText('value');
			$table->enum('type', array(''));
		});
	}

	public function down()
	{
		Schema::drop('general');
	}
}

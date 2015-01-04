<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('contacts', function(Blueprint $table)
        {
            $table->increments('id');

        	$table->integer('clients_id');
            $table->string('veids', 255); // veids
            $table->string('contact_p', 255); // kontakta veicejs
            $table->string('comment', 255); // piezime
           

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
		Schema::drop('contacts');
	}

}
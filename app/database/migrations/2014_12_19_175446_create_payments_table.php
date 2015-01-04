<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
        {
            $table->increments('id');

        	$table->integer('clients_id'); // foreign key
            $table->string('type', 255); // tips
            $table->string('pay_type', 255); // veids
            $table->decimal('cost', 10, 2); // summa
            $table->string('about', 255); // apraksts
            $table->string('notes', 255); // piezimes
           

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
		Schema::drop('payments');
	}

}

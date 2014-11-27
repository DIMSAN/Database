<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('client_name', 255);
            $table->string('fact_adress', 255);
            $table->string('reg_number', 255);
            $table->string('legal_adress', 255);
            $table->string('e_mail', 255);
            $table->string('telephone', 255);
            $table->string('zip_code', 255);
            $table->date('payment_to_date');
            $table->decimal('cost', 10, 2);
            $table->decimal('update_cost', 10, 2);
            $table->string('curator', 255);
            $table->date('install_date');
            $table->integer('distr');
            $table->string('group', 255);
            $table->string('language', 255);
            $table->string('study_status', 255);
            $table->date('study_date');
            $table->string('contact_person', 255);
            $table->string('contact_person_post', 255);
            $table->string('cp_boss', 255);
            $table->string('work_area', 255);
            $table->string('size', 255);
            $table->string('payment_type', 255);
            $table->string('note', 255);

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
		Schema::drop('clients');
	}

}

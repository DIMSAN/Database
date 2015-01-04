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

            $table->string('client_name', 255); // firma
            $table->string('fact_adress', 255); // faktiska adrese
            $table->string('reg_number', 255); // firmas reg numurs
            $table->string('legal_adress', 255); // adress
            $table->string('e_mail', 255);  // email
            $table->string('telephone', 255);  // telefon
            $table->string('zip_code', 255);  // LV-2313
            $table->date('payment_to_date'); // data oplati
            $table->decimal('cost', 10, 2); // stoimostj oplati
            $table->decimal('update_cost', 10, 2);  // stoimostj prodlenija
            $table->integer('payments_id'); // ID tablici payments
            $table->string('curator', 255); // kurator
            $table->date('install_date');  // data ustanovki
            $table->integer('distr');   // nomer distributiva
            $table->string('group', 255);  // grupa
            $table->string('language', 255); // jazik
            $table->string('study_status', 255); // status
            $table->date('study_date'); // data
            $table->string('contact_person', 255); // kontaktnaja persona
            $table->integer('contacts_id'); // ID tablici contacts
            $table->string('contact_person_post', 255); // dolznostj kontaktnoj personi
            $table->string('cp_boss', 255); // nacalnik
            $table->string('work_area', 255); // sfera raboti
            $table->string('size', 255); // razmer (KD)
            $table->string('payment_type', 255); // tip oplati
            $table->string('note', 255); //zametki

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

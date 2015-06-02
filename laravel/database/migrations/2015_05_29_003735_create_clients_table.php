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
        Schema::create('clients',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->integer('document_type_id')->unsigned();
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->string('document');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('client_type_id')->unsigned();
            $table->foreign('client_type_id')->references('id')->on('client_types');
            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender_id');
            $table->interger('address');
            $table->interger('phone');
            $table->interger('birthday');
            $table->timestamps();

        });	//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        schema::drop('clients');
	}

}

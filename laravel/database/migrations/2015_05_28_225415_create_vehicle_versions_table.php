<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle_versions',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('vehicle_line_id')->unsigned();

            $table->foreign('vehicle_line_id')->references('id')->on('vehicle_lines');
            $table->string('cilindraje');
            $table->string('modelFirts');
            $table->string('modelEnd');
            $table->string('capacity');

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
		Schema::dorp('vehicle_versions');
	}

}

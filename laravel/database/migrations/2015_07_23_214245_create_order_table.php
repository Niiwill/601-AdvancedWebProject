<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('order', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('kolicina');
            $table->integer('pizza_id')->unsigned();
            $table->foreign('pizza_id')
                ->references('id')
                ->on('pizza');
            $table->text('napomena');
            $table->integer('velicina_id')->unsigned();
            $table->foreign('velicina_id')
                ->references('id')
                ->on('velicine');
            $table->string('adresa');
            $table->integer('telefon');
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
        Schema::drop('order');
	}

}

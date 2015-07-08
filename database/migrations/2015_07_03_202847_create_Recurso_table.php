<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Recurso', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ISBN')->unique();
			$table->string('Titulo');
			$table->text('Resumen');
			$table->integer('Totalpaginas');
			$table->string('TipoLibro');
			$table->string('Revista');
			$table->string('Monografia');
			$table->string('CodEditorial');
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
		Schema::drop('Recurso');
	}

}

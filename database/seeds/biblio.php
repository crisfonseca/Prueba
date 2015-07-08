<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class biblio extends Seeder {

	public function run()
	{
		$faker = Faker:: create();

		for ($i=0; $i < 20; $i++) 
		{ 
			
			\DB::table('recurso')->insert(array(
				'ISBN'	=> $faker-> unique()->randomNumber,
				'Titulo' => $faker->title,
				'Resumen' => $faker->realText($maxNbChars=100, $indexSize=2),
				'Totalpaginas' => $faker->numberBetween($min=10, $max=900),
				'TipoLibro' =>'cientifico',
				'Revista'=>'colciencias',
				'Monografia'=>'investigacion',
				'CodEditorial' => '123'
			));
		}

		\DB::table('editorial')->insert(array(
				'Codigo' =>'123',
				'NombreEditorial' =>"noma"
		));

		\DB::table('editorial')->insert(array(
				'Codigo' =>'124',
				'NombreEditorial' =>"santillana"
		));
	}
}

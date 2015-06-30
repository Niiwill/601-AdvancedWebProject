<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Velicine;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call( 'VelicineTableSeeder' );
         $this->call( 'PizzaTableSeeder' );
	}

}
class VelicineTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {


        Velicine::create( [
            'ime' => 'M' ,
            'cena' => '4' ,
        ] );

        Velicine::create( [
            'ime' => 'L' ,
            'cena' => '6' ,

        ] );

        Velicine::create( [
            'ime' => 'XL' ,
            'cena' => '12' ,

        ] );
    }
}


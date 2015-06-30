<?php

use Illuminate\Database\Seeder;
use App\Pizza as Pizza;
class PizzaTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run() {


        Pizza::create( [
            'ime' => 'Capriciossa' ,

        ] );

        Pizza::create( [
            'ime' => 'Venezia' ,

        ] );

                Pizza::create( [
                'ime' => 'Margarita' ,

            ] );
    }





}

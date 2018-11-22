<?php

use Illuminate\Database\Seeder;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
        	DB::table('hotels')->insert([
        		'nombre' => str_random(10),
                'direccion' => str_random(10),
                'categoria' => rand(1,5),
                'completo' => false,
                'antiguedad' => '2010-11-20'
        	]);
        }
    }
}

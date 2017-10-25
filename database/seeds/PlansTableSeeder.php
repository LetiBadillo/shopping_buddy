<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = array (
			array(
                'name' => 'Demo',
                'conversations_available' => '1', 
                'duration' => 0,
                'duration_string' => 'Una semana',
                'price' => 0,
                'assesment' => 0,
                'search' => 1),
            array(
                'name' => 'Mensual',
                'conversations_available' => '5', 
                'duration_string' => 'Un mes',
                'duration' => 1,
                'price' => 300,
                'assesment' =>  1,
                'search' => 1),
            array(
                'name' => 'Anual',
                'conversations_available' => NULL, 
                'duration_string' => 'Un año',
                'duration' => 12,
                'price' => 250,
                'assesment' => 1,
                'search' => 1)
        );

        DB::table('plans')->insert($plans);
    }
}

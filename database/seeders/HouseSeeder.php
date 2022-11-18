<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\House::factory(1000)->create();
        /*
        
        $data = [

            [
            'title' => 'Titulo1',
            'content' => 'texto de mi primer casa',
            'color' => 'rojo',
            'phone' => '88923934',
            'author' => 'jlopez',
            'author_age' => 30
            ],

            [
                'title' => 'Titulo2',
                'content' => 'texto de mi segundo casa',
                'color' => 'rojo',
                'phone' => '88923934',
                'author' => 'jlopez',
                'author_age' => 30
            ],

            [
                'title' => 'Titulo3',
                'content' => 'texto de mi tercer casa',
                'color' => 'rojo',
                'phone' => '88923934',
                'author' => 'jlopez',
                'author_age' => 30
            ],

        ];

        

        DB::table('houses')->insert($data);
        */

    }
}

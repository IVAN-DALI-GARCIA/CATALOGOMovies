<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieTablaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();


        // Crear artículos ficticios en la tabla
    //     for ($i = 0; $i < 50; $i++) {
    //     Movie::create([
    //         'title' => $faker->word(),
    //         'synopsis' => $faker->paragraph(),
    //         'year' => $faker->randomNumber(5,true),
    //         'cover' => $faker->word(),
    //     ]);
    // }





        \App\Models\Movie::factory(50)->create();
        // $data = [
        //     [
        //         'title' => 'Titulo 1',
        //         'synopsis' => 'Descripcion 1',
        //         'year' => 2020,
        //         'cover' => 'Titulo 1'
        //     ],
        //     [
        //         'title' => 'Titulo 2',
        //         'synopsis' => 'Esta es una descripcion de Titulo 2',
        //         'year' => 2020,
        //         'cover' => 'Sin cover'
        //     ],
        //     [
        //         'title' => 'Titulo 3',
        //         'synopsis' => 'Esta es una descripcion de Titulo 3',
        //         'year' => 2020,
        //         'cover' => 'Titulo 3'
        //     ],
        //     [
        //         'title' => 'Titulo 4',
        //         'synopsis' => 'Esta es una descripcion de Titulo 4',
        //         'year' => 2020,
        //         'cover' => 'Titulo 4'
        //     ],
        //     [
        //         'title' => 'Titulo 5',
        //         'synopsis' => 'Esta es una descripcion de Titulo 5',
        //         'year' => 2020,
        //         'cover' => 'Titulo 5'
        //     ],
        //     [
        //         'title' => 'Titulo 6',
        //         'synopsis' => 'Esta es una descripcion de Titulo 6',
        //         'year' => 2020,
        //         'cover' => 'Titulo 6'
        //     ],
        //     [
        //         'title' => 'Titulo 7',
        //         'synopsis' => 'Esta es una descripcion de Titulo 7',
        //         'year' => 2020,
        //         'cover' => 'Titulo 7'
        //     ],
        //     [
        //         'title' => 'Titulo 8',
        //         'synopsis' => 'Esta es una descripcion de Titulo 8',
        //         'year' => 2020,
        //         'cover' => 'Titulo 8'
        //     ],
        //     [
        //         'title' => 'Titulo 9',
        //         'synopsis' => 'Esta es una descripcion de Titulo ',
        //         'year' => 2020,
        //         'cover' => 'Titulo 9'
        //     ],
        //     [
        //         'title' => 'Titulo 10',
        //         'synopsis' => 'Esta es una descripcion de Titulo 10',
        //         'year' => 2020,
        //         'cover' => 'Titulo 10'
        //     ],
        // ];
        // DB::table('movies')->insert($data);
    }
}

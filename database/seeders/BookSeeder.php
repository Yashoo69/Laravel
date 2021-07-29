<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('books')->insert([[
            'title' => 'Crime et Châtiment',
            'author' => 'Fiodor Dostoïevski',
            'genre' => 'roman',
            'publication_year' => rand(2000, 2020),
            'synopsis' => "Le roman dépeint le meurtre prémédité d'une vieille prêteuse sur gage et de sa sœur par Raskolnikov, et ses conséquences mentales et physiques. ",
        ],
        [
            'title' => 'Dracula ',
            'author' => 'Bram Stoker',
            'genre' => 'Roman et fantastique.',
            'publication_year' => 1897,
            'synopsis' => "En arrivant dans les Carpates, Jonathan Harker est épuisé par son périple. Mais son client et hôte, le comte Dracula, n'est pas ce qu'il attendait.",
        ],
        [
            'title' => 'Gatsby le magnifique',
            'author' => 'F. Scott Fitzgerald',
            'genre' => 'roman',
            'publication_year' => 1925,
            'synopsis' => "Nick Carraway, la trentaine, se rend à New York pour travailler dans la finance. Par hasard, il trouve à louer une petite bicoque à Long Island.",
       ]]);
    }
    
}
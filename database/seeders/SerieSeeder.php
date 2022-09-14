<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $series = [
            [
                'title' => 'The Office',
                'number_of_seasons' => 9,
                'premiere_date' => '2005-03-24',
                'genre' => 'Comedy',
            ],
            [
                'title' => 'Over The Garde Wall',
                'number_of_seasons' => 1,
                'premiere_date' => '2005-03-24',
                'genre' => 'Dark Fantasy',
            ],
            [
                'title' => 'Gravity Falls',
                'number_of_seasons' => 2,
                'premiere_date' => '2012-06-15',
                'genre' => 'Animation',
            ],
            [
                'title' => 'How I Met Your Mother',
                'number_of_seasons' => 9,
                'premiere_date' => '2005-03-24',
                'genre' => 'Romantic Comedy'
            ],
            [
                'title' => 'The Legend of Korra',
                'number_of_seasons' => 4,
                'premiere_date' => '2014-04-14',
                'genre' => 'Action',
            ],
            [
                'title' => 'Suits',
                'number_of_seasons' => 9,
                'premiere_date' => '2011-05-23',
                'genre' => 'Legal drama',
            ],
            [
                'title' => 'Carnival Row',
                'number_of_seasons' => 1,
                'premiere_date' => '2019-08-30',
                'genre' => 'Crime drama',
            ],
            [
                'title' => 'The Mentalist',
                'number_of_seasons' => 7,
                'premiere_date' => '2008-09-23',
                'genre' => 'Mystery',
            ],
            [
                'title' => 'The Midnight Gospel',
                'number_of_seasons' => 1,
                'premiere_date' => '2020-04-20',
                'genre' => 'Science fantasy',
            ],
            [
                'title' => 'Gotham',
                'number_of_seasons' => 5,
                'premiere_date' => '2014-09-22',
                'genre' => 'Crime drama',
            ],
            [
                'title' => 'Good Doctor',
                'number_of_seasons' => 5,
                'premiere_date' => '2017-09-25',
                'genre' => 'Medical drama',
            ],
            [
                'title' => 'Moon Knight',
                'number_of_seasons' => 1,
                'premiere_date' => '2022-05-04',
                'genre' => 'Fantasy',
            ],
            [
                'title' => 'The Boys',
                'number_of_seasons' => 3,
                'premiere_date' => '2019-06-19',
                'genre' => 'Action',
            ],
            [
                'title' => 'Stan Lee\'s Lucky Man',
                'number_of_seasons' => 3,
                'premiere_date' => '2016-01-22',
                'genre' => 'Action',
            ],
            [
                'title' => 'The Magicians',
                'number_of_seasons' => 5,
                'premiere_date' => '2015-12-16',
                'genre' => 'Fantasy',
            ],
        ];

        foreach ($series as $key => $value) {
            Serie::create($value);
        }
    }
}

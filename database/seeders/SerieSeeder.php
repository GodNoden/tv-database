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
                'picture' => 'https://www.themoviedb.org/t/p/original/dg9e5fPRRId8PoBE0F6jl5y85Eu.jpg',
            ],
            [
                'title' => 'Over The Garde Wall',
                'number_of_seasons' => 1,
                'premiere_date' => '2005-03-24',
                'genre' => 'Dark Fantasy',
                'picture' => 'https://www.themoviedb.org/t/p/original/m3lU8n7WxzMecxKZcqhq5y5ESy.jpg',
            ],
            [
                'title' => 'Gravity Falls',
                'number_of_seasons' => 2,
                'premiere_date' => '2012-06-15',
                'genre' => 'Animation',
                'picture' => 'https://www.themoviedb.org/t/p/original/t9inzSLIttATX6RdnmDjL7T4WN7.jpg',
            ],
            [
                'title' => 'How I Met Your Mother',
                'number_of_seasons' => 9,
                'premiere_date' => '2005-03-24',
                'genre' => 'Romantic Comedy',
                'picture' => 'https://www.themoviedb.org/t/p/original/b34jPzmB0wZy7EjUZoleXOl2RRI.jpg',
            ],
            [
                'title' => 'The Legend of Korra',
                'number_of_seasons' => 4,
                'premiere_date' => '2014-04-14',
                'genre' => 'Action',
                'picture' => 'https://www.themoviedb.org/t/p/original/nhP0VGO2GSZbL4PUgmA6Vja48aM.jpg',
            ],
            [
                'title' => 'Suits',
                'number_of_seasons' => 9,
                'premiere_date' => '2011-05-23',
                'genre' => 'Legal drama',
                'picture' => 'https://www.themoviedb.org/t/p/original/7PWfEPvtH9VbshDqmNSLWtubCr.jpg',
            ],
            [
                'title' => 'Carnival Row',
                'number_of_seasons' => 2,
                'premiere_date' => '2019-08-30',
                'genre' => 'Crime drama',
                'picture' => 'https://www.themoviedb.org/t/p/original/3UupR0nS9R6Di9letdz4ftX95GF.jpg',
            ],
            [
                'title' => 'The Mentalist',
                'number_of_seasons' => 7,
                'premiere_date' => '2008-09-23',
                'genre' => 'Mystery',
                'picture' => 'https://www.themoviedb.org/t/p/original/e64Oj3weB6qzdKPaZQmPBtsjcSF.jpg',
            ],
            [
                'title' => 'The Midnight Gospel',
                'number_of_seasons' => 1,
                'premiere_date' => '2020-04-20',
                'genre' => 'Science fantasy',
                'picture' => 'https://www.themoviedb.org/t/p/original/me3kxfiFRkdto6SmDQv0nczjfmP.jpg',
            ],
            [
                'title' => 'Gotham',
                'number_of_seasons' => 5,
                'premiere_date' => '2014-09-22',
                'genre' => 'Crime drama',
                'picture' => 'https://www.themoviedb.org/t/p/original/oVjNDSbPJ1wS4ob1Pwc3gP3gfBB.jpg',
            ],
            [
                'title' => 'Good Doctor',
                'number_of_seasons' => 5,
                'premiere_date' => '2017-09-25',
                'genre' => 'Medical drama',
                'picture' => 'https://www.themoviedb.org/t/p/original/cXUqtadGsIcZDWUTrfnbDjAy8eN.jpg',
            ],
            [
                'title' => 'Moon Knight',
                'number_of_seasons' => 1,
                'premiere_date' => '2022-05-04',
                'genre' => 'Fantasy',
                'picture' => 'https://www.themoviedb.org/t/p/original/x6FsYvt33846IQnDSFxla9j0RX8.jpg',
            ],
            [
                'title' => 'The Boys',
                'number_of_seasons' => 3,
                'premiere_date' => '2019-06-19',
                'genre' => 'Action',
                'picture' => 'https://www.themoviedb.org/t/p/original/dzOxNbbz1liFzHU1IPvdgUR647b.jpg',
            ],
            [
                'title' => 'Stan Lee\'s Lucky Man',
                'number_of_seasons' => 3,
                'premiere_date' => '2016-01-22',
                'genre' => 'Action',
                'picture' => 'https://www.themoviedb.org/t/p/original/cnKC1Az0uWTyMifFoG2t2mtD2xD.jpg',
            ],
            [
                'title' => 'The Magicians',
                'number_of_seasons' => 5,
                'premiere_date' => '2015-12-16',
                'genre' => 'Fantasy',
                'picture' => 'https://www.themoviedb.org/t/p/original/o8LXvYsb5oYKBBqOG1qkVPjYRqd.jpg',
            ],
        ];

        foreach ($series as $key => $value) {
            Serie::create($value);
        }
    }
}

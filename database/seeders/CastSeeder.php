<?php

namespace Database\Seeders;

use App\Models\Cast;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $casts = [
            [
                'name' => 'Steve',
                'last_name' => 'Carell',
                'birthday' => '1962-07-16',
                'nationality' => 'United States',
            ],
            [
                'name' => 'John',
                'last_name' => 'Krasinski',
                'birthday' => '1979-07-16',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Rainn',
                'last_name' => 'Wilson',
                'birthday' => '1966-01-20',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Jenna',
                'last_name' => 'Fischer',
                'birthday' => '1974-03-07',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Collin',
                'last_name' => 'Dean',
                'birthday' => '2005-01-17',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Elijah',
                'last_name' => 'Wood',
                'birthday' => '1981-01-28',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Melanie',
                'last_name' => 'Lynskey',
                'birthday' => '1977-05-16',
                'nationality' => 'New Zealand',
            ],
            [
                'name' => 'Cole',
                'last_name' => 'Sanchez',
                'birthday' => '1985-03-01',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Alex',
                'last_name' => 'Hirsch',
                'birthday' => '1985-06-18',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Kristen',
                'last_name' => 'Schaal',
                'birthday' => '1978-01-24',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Jason',
                'last_name' => 'Ritter',
                'birthday' => '1980-02-17',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Linda',
                'last_name' => 'Cardellini',
                'birthday' => '1975-06-25',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Josh',
                'last_name' => 'Radnor',
                'birthday' => '1974-07-29',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Neil Patrick',
                'last_name' => 'Harris',
                'birthday' => '1973-06-15',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Cobie',
                'last_name' => 'Smulders',
                'birthday' => '1982-04-03',
                'nationality' => 'Canada',
            ],
            [
                'name' => 'Alyson',
                'last_name' => 'Hannigan',
                'birthday' => '1974-03-24',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Janet',
                'last_name' => 'Varney',
                'birthday' => '1976-02-16',
                'nationality' => 'United States',
            ],
            [
                'name' => 'David',
                'last_name' => 'Faustino',
                'birthday' => '1974-03-03',
                'nationality' => 'United States',
            ],
            [
                'name' => 'P.J.',
                'last_name' => 'Byrne',
                'birthday' => '1974-12-15',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Seychelle',
                'last_name' => 'Gabriel',
                'birthday' => '1991-03-25',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Gabriel',
                'last_name' => 'Macht',
                'birthday' => '1972-01-22',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Patrick J.',
                'last_name' => 'Adams',
                'birthday' => '1981-08-27',
                'nationality' => 'Canada',
            ],
            [
                'name' => 'Sarah',
                'last_name' => 'Rafferty',
                'birthday' => '1972-12-06',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Rick',
                'last_name' => 'Hoffman',
                'birthday' => '1997-06-12',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Orlando',
                'last_name' => 'Bloom',
                'birthday' => '1977-01-13',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Cara',
                'last_name' => 'Delevingne',
                'birthday' => '1992-06-12',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Tamzin',
                'last_name' => 'Merchant',
                'birthday' => '1987-03-04',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Karla',
                'last_name' => 'Crome',
                'birthday' => '1988-06-22',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Simon',
                'last_name' => 'Baker',
                'birthday' => '1969-07-30',
                'nationality' => 'Australia',
            ],
            [
                'name' => 'Tim',
                'last_name' => 'Kang',
                'birthday' => '1973-03-16',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Robin',
                'last_name' => 'Tunney',
                'birthday' => '1972-06-19',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Morena',
                'last_name' => 'Baccarin',
                'birthday' => '1979-06-02',
                'nationality' => 'Brazil',
            ],
            [
                'name' => 'Duncan',
                'last_name' => 'Trussell',
                'birthday' => '1974-04-20',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Damien',
                'last_name' => 'Echols',
                'birthday' => '1974-12-11',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Anne',
                'last_name' => 'Lamott',
                'birthday' => '1954-04-10',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Drew',
                'last_name' => 'Pinsky',
                'birthday' => '1984-12-04',
                'nationality' => 'United States',
            ],
            [
                'name' => 'David',
                'last_name' => 'Mazouz',
                'birthday' => '2001-02-19',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Benjamin',
                'last_name' => 'McKenzie',
                'birthday' => '1978-09-12',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Robin Lord',
                'last_name' => 'Taylor',
                'birthday' => '1978-06-04',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Freddie',
                'last_name' => 'Highmore',
                'birthday' => '1992-02-14',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Antonia',
                'last_name' => 'Thomas',
                'birthday' => '1986-11-03',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Fiona',
                'last_name' => 'Gubelmann',
                'birthday' => '1980-03-30',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Paige',
                'last_name' => 'Spara',
                'birthday' => '1989-08-09',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Oscar',
                'last_name' => 'Isaac',
                'birthday' => '1979-03-09',
                'nationality' => 'Guatemala',
            ],
            [
                'name' => 'Ethan',
                'last_name' => 'Hawke',
                'birthday' => '1970-11-06',
                'nationality' => 'United States',
            ],
            [
                'name' => 'May',
                'last_name' => 'Calamawy',
                'birthday' => '1986-10-28',
                'nationality' => 'Bahrain',
            ],
            [
                'name' => 'Fernanda',
                'last_name' => 'Andrade',
                'birthday' => '1984-03-08',
                'nationality' => 'Brazil',
            ],
            [
                'name' => 'Anthony',
                'last_name' => 'Starr',
                'birthday' => '1975-10-25',
                'nationality' => 'New Zealand',
            ],
            [
                'name' => 'Karl',
                'last_name' => 'Urban',
                'birthday' => '1972-06-07',
                'nationality' => 'New Zealand',
            ],
            [
                'name' => 'Jack',
                'last_name' => 'Quaid',
                'birthday' => '1992-04-24',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Erin',
                'last_name' => 'Moriarty',
                'birthday' => '1994-06-24',
                'nationality' => 'United States',
            ],
            [
                'name' => 'James',
                'last_name' => 'Nesbitt',
                'birthday' => '1965-01-15',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Darren',
                'last_name' => 'Boyd',
                'birthday' => '1971-01-30',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Eve',
                'last_name' => 'Best',
                'birthday' => '1971-07-31',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Sienna',
                'last_name' => 'Guillory',
                'birthday' => '1975-03-16',
                'nationality' => 'United Kingdom',
            ],
            [
                'name' => 'Olivia Taylor',
                'last_name' => 'Dudley',
                'birthday' => '1985-11-04',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Jason',
                'last_name' => 'Ralph',
                'birthday' => '1986-04-07',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Jade',
                'last_name' => 'Tailor',
                'birthday' => '1985-08-12',
                'nationality' => 'United States',
            ],
            [
                'name' => 'Stella',
                'last_name' => 'Maeve',
                'birthday' => '1989-11-14',
                'nationality' => 'United States',
            ],
        ];

        foreach ($casts as $key => $cast) {
            Cast::create($cast);
        }
    }
}

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
                'picture' => 'https://www.themoviedb.org/t/p/original/dzJtsLspH5Bf8Tvw7OQC47ETNfJ.jpg'
            ],
            [
                'name' => 'John',
                'last_name' => 'Krasinski',
                'birthday' => '1979-07-16',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/kFAUNOlV25OjZGm2vYnvxc6rSUK.jpg'
            ],
            [
                'name' => 'Rainn',
                'last_name' => 'Wilson',
                'birthday' => '1966-01-20',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/rEDRAFYX5n2JKJh9EKILX42klA5.jpg'
            ],
            [
                'name' => 'Jenna',
                'last_name' => 'Fischer',
                'birthday' => '1974-03-07',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/mfKRbOHTPNi9jFSthtjl4FGVZv6.jpg'
            ],
            [
                'name' => 'Collin',
                'last_name' => 'Dean',
                'birthday' => '2005-01-17',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/zh58W7LjGDh9sF4ZhKspb9tPIlL.jpg'
            ],
            [
                'name' => 'Elijah',
                'last_name' => 'Wood',
                'birthday' => '1981-01-28',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/7UKRbJBNG7mxBl2QQc5XsAh6F8B.jpg'
            ],
            [
                'name' => 'Melanie',
                'last_name' => 'Lynskey',
                'birthday' => '1977-05-16',
                'nationality' => 'New Zealand',
                'picture' => 'https://www.themoviedb.org/t/p/original/kzrWI1sTgnA0H7TCIKzDOUtOW4n.jpg'
            ],
            [
                'name' => 'Samuel',
                'last_name' => 'Ramey',
                'birthday' => '1942-03-28',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/mqxTOwlKY7tOTBUvNsrBWKZtHsJ.jpg'
            ],
            [
                'name' => 'Alex',
                'last_name' => 'Hirsch',
                'birthday' => '1985-06-18',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/yEtSsdzH4Wdwy7LEG4jt92rCgXr.jpg'
            ],
            [
                'name' => 'Kristen',
                'last_name' => 'Schaal',
                'birthday' => '1978-01-24',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/s3LSHVTx8gxHP2twYsXEGa8JbLl.jpg'
            ],
            [
                'name' => 'Jason',
                'last_name' => 'Ritter',
                'birthday' => '1980-02-17',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/2WcaYXqe1AhxqezTffgIc7HmSmX.jpg'
            ],
            [
                'name' => 'Linda',
                'last_name' => 'Cardellini',
                'birthday' => '1975-06-25',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/bcycvynDprC1rrhBNrnBjn5uOUd.jpg'
            ],
            [
                'name' => 'Josh',
                'last_name' => 'Radnor',
                'birthday' => '1974-07-29',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/rHx4D70iRUkka5kl9064kOvmSQs.jpg'
            ],
            [
                'name' => 'Neil Patrick',
                'last_name' => 'Harris',
                'birthday' => '1973-06-15',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/qZwbo23uaJU87NxE5RubbeeLTYh.jpg'
            ],
            [
                'name' => 'Cobie',
                'last_name' => 'Smulders',
                'birthday' => '1982-04-03',
                'nationality' => 'Canada',
                'picture' => 'https://www.themoviedb.org/t/p/original/1b0mYokcGsfFRge4bjXlS5ihtek.jpg'
            ],
            [
                'name' => 'Alyson',
                'last_name' => 'Hannigan',
                'birthday' => '1974-03-24',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/l1QSwcXC25xOaTHoSFGsLMayaoe.jpg'
            ],
            [
                'name' => 'Janet',
                'last_name' => 'Varney',
                'birthday' => '1976-02-16',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/3oMQf9mtVXXXKF2FhUH7kCIOOIf.jpg'
            ],
            [
                'name' => 'David',
                'last_name' => 'Faustino',
                'birthday' => '1974-03-03',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/dNqoFIPkusGDUjjIAX0jmtQV47v.jpg'
            ],
            [
                'name' => 'P.J.',
                'last_name' => 'Byrne',
                'birthday' => '1974-12-15',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/sKqr3A3LjLYlRCXJGJI8rjpdMOs.jpg'
            ],
            [
                'name' => 'Seychelle',
                'last_name' => 'Gabriel',
                'birthday' => '1991-03-25',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/jBrdrWZoYgcrnz5aLLXHu4bXUXh.jpg'
            ],
            [
                'name' => 'Gabriel',
                'last_name' => 'Macht',
                'birthday' => '1972-01-22',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/lacMH4Ju1x9AsKXm7mDkklSsPyV.jpg'
            ],
            [
                'name' => 'Patrick J.',
                'last_name' => 'Adams',
                'birthday' => '1981-08-27',
                'nationality' => 'Canada',
                'picture' => 'https://www.themoviedb.org/t/p/original/jz6pxAVhKRgsbvXjh8zOob7RpA8.jpg'
            ],
            [
                'name' => 'Sarah',
                'last_name' => 'Rafferty',
                'birthday' => '1972-12-06',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/ufqi6MXH5cJZlN3rXCn8rmFPhtz.jpg'
            ],
            [
                'name' => 'Rick',
                'last_name' => 'Hoffman',
                'birthday' => '1997-06-12',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/yRjH4z0lKgvjxZ07P7bvRpZy95q.jpg'
            ],
            [
                'name' => 'Orlando',
                'last_name' => 'Bloom',
                'birthday' => '1977-01-13',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/lwQoA0qJTCZ6l2FH6PjmhRQjiaB.jpg'
            ],
            [
                'name' => 'Cara',
                'last_name' => 'Delevingne',
                'birthday' => '1992-06-12',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/fxpve7evj6H1kl8rTnDqNyIdObI.jpg'
            ],
            [
                'name' => 'Tamzin',
                'last_name' => 'Merchant',
                'birthday' => '1987-03-04',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/gsUJXh24FHdCPYsJwSdNnaMNrlU.jpg'
            ],
            [
                'name' => 'Karla',
                'last_name' => 'Crome',
                'birthday' => '1988-06-22',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/vuiF5OfHLQBaIfXgVKERJKRyPN8.jpg'
            ],
            [
                'name' => 'Simon',
                'last_name' => 'Baker',
                'birthday' => '1969-07-30',
                'nationality' => 'Australia',
                'picture' => 'https://www.themoviedb.org/t/p/original/oay0Lo2zl0lJdguptxgx1BK9Xq7.jpg'
            ],
            [
                'name' => 'Tim',
                'last_name' => 'Kang',
                'birthday' => '1973-03-16',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/kGK9nQjmSOivwtwg9Q0ljO4nPOw.jpg'
            ],
            [
                'name' => 'Robin',
                'last_name' => 'Tunney',
                'birthday' => '1972-06-19',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/6Q41n1HfbEo8lOK0eXGNtZMeP4n.jpg'
            ],
            [
                'name' => 'Morena',
                'last_name' => 'Baccarin',
                'birthday' => '1979-06-02',
                'nationality' => 'Brazil',
                'picture' => 'https://www.themoviedb.org/t/p/original/kBSKKaOtsqIzZPhtEeHfCBmhWl9.jpg'
            ],
            [
                'name' => 'Duncan',
                'last_name' => 'Trussell',
                'birthday' => '1974-04-20',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/kQXZneBSURi8RktVSbJxA5CWuQQ.jpg'
            ],
            [
                'name' => 'Pphil',
                'last_name' => 'Hendrie',
                'birthday' => '1952-09-01',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/yVEa7Z3AXlTY4Aob2nsDH7I1u4r.jpg'
            ],
            [
                'name' => 'Joey',
                'last_name' => 'Diaz',
                'birthday' => '1963-02-19',
                'nationality' => 'Cuba',
                'picture' => 'https://www.themoviedb.org/t/p/original/pLWM7fQoqbbNui1vf7PKE0jdlm2.jpg'
            ],
            [
                'name' => 'Drew',
                'last_name' => 'Pinsky',
                'birthday' => '1984-12-04',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/zbZVcTYiUeV92vco6QRpkTt7Iqt.jpg'
            ],
            [
                'name' => 'David',
                'last_name' => 'Mazouz',
                'birthday' => '2001-02-19',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/g9s91ASMlulJu2qQtZglya4dBH5.jpg'
            ],
            [
                'name' => 'Benjamin',
                'last_name' => 'McKenzie',
                'birthday' => '1978-09-12',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/dHj2xtDOuZc193W4UpQkq4niZcy.jpg'
            ],
            [
                'name' => 'Robin Lord',
                'last_name' => 'Taylor',
                'birthday' => '1978-06-04',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/bF6ySz4ByruGRz9REmN3hK3WxpI.jpg'
            ],
            [
                'name' => 'Freddie',
                'last_name' => 'Highmore',
                'birthday' => '1992-02-14',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/9larfGVg8ALIVFkr7cZzv4Emh1F.jpg'
            ],
            [
                'name' => 'Antonia',
                'last_name' => 'Thomas',
                'birthday' => '1986-11-03',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/1VaSdCjWhft9sLpeaslznSrWyEL.jpg'
            ],
            [
                'name' => 'Fiona',
                'last_name' => 'Gubelmann',
                'birthday' => '1980-03-30',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/lwTOkAd2vb6mlNqrIWlVlYGnz2C.jpg'
            ],
            [
                'name' => 'Paige',
                'last_name' => 'Spara',
                'birthday' => '1989-08-09',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/elcx21E3X5xBjW31gXBJnWTSvYX.jpg'
            ],
            [
                'name' => 'Oscar',
                'last_name' => 'Isaac',
                'birthday' => '1979-03-09',
                'nationality' => 'Guatemala',
                'picture' => 'https://www.themoviedb.org/t/p/original/mt11usKbDvaV0OgYJVO1xWJ4Mti.jpg'
            ],
            [
                'name' => 'Ethan',
                'last_name' => 'Hawke',
                'birthday' => '1970-11-06',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/fw9DOYWkw6JhAlnPQY0QPcPEvyP.jpg'
            ],
            [
                'name' => 'May',
                'last_name' => 'Calamawy',
                'birthday' => '1986-10-28',
                'nationality' => 'Bahrain',
                'picture' => 'https://www.themoviedb.org/t/p/original/i1yy5xxPE0bsvdJ3BgyLHGfk1c1.jpg'
            ],
            [
                'name' => 'Fernanda',
                'last_name' => 'Andrade',
                'birthday' => '1984-03-08',
                'nationality' => 'Brazil',
                'picture' => 'https://www.themoviedb.org/t/p/original/tXbeS1OnVKwC2BxXl4rNQjH0rh4.jpg'
            ],
            [
                'name' => 'Anthony',
                'last_name' => 'Starr',
                'birthday' => '1975-10-25',
                'nationality' => 'New Zealand',
                'picture' => 'https://www.themoviedb.org/t/p/original/yZx1AkgS8SJjRYd20V0IEfRGtpl.jpg'
            ],
            [
                'name' => 'Karl',
                'last_name' => 'Urban',
                'birthday' => '1972-06-07',
                'nationality' => 'New Zealand',
                'picture' => 'https://www.themoviedb.org/t/p/original/noh94S1b6t8JIEBC1KMdoh3DPB3.jpg'
            ],
            [
                'name' => 'Jack',
                'last_name' => 'Quaid',
                'birthday' => '1992-04-24',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/2AlOMWsL0TguKxIjpghEuQkoObG.jpg'
            ],
            [
                'name' => 'Erin',
                'last_name' => 'Moriarty',
                'birthday' => '1994-06-24',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/2tFblvjBRUYwcVT1V1i79Ppd6wG.jpg'
            ],
            [
                'name' => 'James',
                'last_name' => 'Nesbitt',
                'birthday' => '1965-01-15',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/gdbR1DhI7dOi027mQgnWwYgYGxj.jpg'
            ],
            [
                'name' => 'Darren',
                'last_name' => 'Boyd',
                'birthday' => '1971-01-30',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/cHDIKSsqCvu7PTBcfdxAKN99dQz.jpg'
            ],
            [
                'name' => 'Eve',
                'last_name' => 'Best',
                'birthday' => '1971-07-31',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/wCHFBoaVIQsGSyEerFacCSYhdMl.jpg'
            ],
            [
                'name' => 'Sienna',
                'last_name' => 'Guillory',
                'birthday' => '1975-03-16',
                'nationality' => 'United Kingdom',
                'picture' => 'https://www.themoviedb.org/t/p/original/rpnWJT1d61GwnG9bQoGSxWbIaL4.jpg'
            ],
            [
                'name' => 'Olivia Taylor',
                'last_name' => 'Dudley',
                'birthday' => '1985-11-04',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/rVwLRb9Fmj9JzCEK78bZ2weCodx.jpg'
            ],
            [
                'name' => 'Jason',
                'last_name' => 'Ralph',
                'birthday' => '1986-04-07',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/i7sjPMHxKjAcvXl8bg1jpFBmsxS.jpg'
            ],
            [
                'name' => 'Jade',
                'last_name' => 'Tailor',
                'birthday' => '1985-08-12',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/4gw3fto0fI4s7mIZlMrAYYpscje.jpg'
            ],
            [
                'name' => 'Stella',
                'last_name' => 'Maeve',
                'birthday' => '1989-11-14',
                'nationality' => 'United States',
                'picture' => 'https://www.themoviedb.org/t/p/original/q6G1ckezdnU3nOCpucrwVfdXXhd.jpg'
            ],
        ];

        foreach ($casts as $key => $cast) {
            Cast::create($cast);
        }
    }
}

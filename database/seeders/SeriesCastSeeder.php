<?php

namespace Database\Seeders;

use App\Models\SeriesCast;
use Illuminate\Database\Seeder;

class SeriesCastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SerieCasts = [
            [
                'series_id' => 1,
                'casts_id' => 1
            ],
            [
                'series_id' => 1,
                'casts_id' => 2
            ],
            [
                'series_id' => 1,
                'casts_id' => 3
            ],
            [
                'series_id' => 1,
                'casts_id' => 4
            ],
            [
                'series_id' => 2,
                'casts_id' => 5
            ],
            [
                'series_id' => 2,
                'casts_id' => 6
            ],
            [
                'series_id' => 2,
                'casts_id' => 7
            ],
            [
                'series_id' => 2,
                'casts_id' => 8
            ],
            [
                'series_id' => 3,
                'casts_id' => 9
            ],
            [
                'series_id' => 3,
                'casts_id' => 10
            ],
            [
                'series_id' => 3,
                'casts_id' => 11
            ],
            [
                'series_id' => 3,
                'casts_id' => 12
            ],
            [
                'series_id' => 4,
                'casts_id' => 13
            ],
            [
                'series_id' => 4,
                'casts_id' => 14
            ],
            [
                'series_id' => 4,
                'casts_id' => 15
            ],
            [
                'series_id' => 4,
                'casts_id' => 16
            ],
            [
                'series_id' => 5,
                'casts_id' => 17
            ],
            [
                'series_id' => 5,
                'casts_id' => 18
            ],
            [
                'series_id' => 5,
                'casts_id' => 19
            ],
            [
                'series_id' => 5,
                'casts_id' => 20
            ],
            [
                'series_id' => 6,
                'casts_id' => 21
            ],
            [
                'series_id' => 6,
                'casts_id' => 22
            ],
            [
                'series_id' => 6,
                'casts_id' => 23
            ],
            [
                'series_id' => 6,
                'casts_id' => 24
            ],
            [
                'series_id' => 7,
                'casts_id' => 25
            ],
            [
                'series_id' => 7,
                'casts_id' => 26
            ],
            [
                'series_id' => 7,
                'casts_id' => 27
            ],
            [
                'series_id' => 7,
                'casts_id' => 28
            ],
            [
                'series_id' => 8,
                'casts_id' => 29
            ],
            [
                'series_id' => 8,
                'casts_id' => 30
            ],
            [
                'series_id' => 8,
                'casts_id' => 31
            ],
            [
                'series_id' => 8,
                'casts_id' => 32
            ],
            [
                'series_id' => 9,
                'casts_id' => 33
            ],
            [
                'series_id' => 9,
                'casts_id' => 34
            ],
            [
                'series_id' => 9,
                'casts_id' => 35
            ],
            [
                'series_id' => 9,
                'casts_id' => 36
            ],
            [
                'series_id' => 10,
                'casts_id' => 37
            ],
            [
                'series_id' => 10,
                'casts_id' => 38
            ],
            [
                'series_id' => 10,
                'casts_id' => 39
            ],
            [
                'series_id' => 10,
                'casts_id' => 32
            ],
            [
                'series_id' => 11,
                'casts_id' => 40
            ],
            [
                'series_id' => 11,
                'casts_id' => 41
            ],
            [
                'series_id' => 11,
                'casts_id' => 42
            ],
            [
                'series_id' => 11,
                'casts_id' => 43
            ],
            [
                'series_id' => 12,
                'casts_id' => 44
            ],
            [
                'series_id' => 12,
                'casts_id' => 45
            ],
            [
                'series_id' => 12,
                'casts_id' => 46
            ],
            [
                'series_id' => 12,
                'casts_id' => 47
            ],
            [
                'series_id' => 13,
                'casts_id' => 48
            ],
            [
                'series_id' => 13,
                'casts_id' => 49
            ],
            [
                'series_id' => 13,
                'casts_id' => 50
            ],
            [
                'series_id' => 13,
                'casts_id' => 51
            ],
            [
                'series_id' => 14,
                'casts_id' => 52
            ],
            [
                'series_id' => 14,
                'casts_id' => 53
            ],
            [
                'series_id' => 14,
                'casts_id' => 54
            ],
            [
                'series_id' => 14,
                'casts_id' => 55
            ],
            [
                'series_id' => 15,
                'casts_id' => 56
            ],
            [
                'series_id' => 15,
                'casts_id' => 57
            ],
            [
                'series_id' => 15,
                'casts_id' => 58
            ],
            [
                'series_id' => 15,
                'casts_id' => 59
            ],
        ];

        foreach ($SerieCasts as $key => $SerieCast) {
            SeriesCast::create($SerieCast);
        }
    }
}

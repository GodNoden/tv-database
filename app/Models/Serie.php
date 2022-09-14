<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'number_of_seasons', 'premiere_date', 'genre'];

    public function casts()
    {
        return $this->belongsToMany(Cast::class, 'series_casts', 'series_id', 'casts_id');
    }
}

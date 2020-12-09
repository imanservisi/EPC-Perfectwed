<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title_project',
        'wed_date',
        'wed_city',
        'wed_postal_code',
        'wed_address',
        'budget',
        'menu',
        'hair',
        'ring',
        'makeup',
        'decoration',
        'wine',
        'transport',
        'animation',
        'place_price',
        'photo',
        'costume',
        'announcement',
        'nb_guest',
        'ceremony',
        'flower',
        'other',
    ];



}


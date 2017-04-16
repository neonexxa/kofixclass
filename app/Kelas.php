<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'Title',
		'Description',
		'Date',
		'Time',
		'Location',
		'Register_link',
		'Price',
		'Poster',
		'Trainer',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $table ='home_pages';

    protected $fillable = [
        'titrehomepage',
        'sous_titrehomepage',
        'btnstart',
        'titreabout',
        'sous_titreabout',
        'btnabout',
        'titrecard1',
        'descriptioncard1',
        'titrecard2',
        'descriptioncard2',
        'titrecard3',
        'descriptioncard3',
        'titrecard4',
        'descriptioncard4'
    ];
}

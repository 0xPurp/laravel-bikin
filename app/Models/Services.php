<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        "id",
        "titre",
        "soustitre",
        "titrecard1",
        "descriptioncard1",
        "titrecard2",
        "descriptioncard2",
        "titrecard3",
        "descriptioncard3",
        "titrecard4",
        "descriptioncard"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'titre',
        'sous_titre',
        "photocrew1",
        "nomcrew1",
        "postecrew1",
        "photocrew2",
        "nomcrew2",
        "postecrew2",
        "photocrew3",
        "nomcrew3",
        "postecrew3",
        "photocrew4",
        "nomcrew4",
        "postecrew4"
    ];

}

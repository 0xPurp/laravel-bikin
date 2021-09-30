<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table ='contacts';

    protected $fillable = [
        'titre',
        'sous-titre',
        'titreadresse',
        'adresse',
        'titremail',
        'mail1',
        'mail2',
        'titrephone',
        'phone1',
        'phone2'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    protected $fillable = [
        'titre',
        'sous_titre',
        'categorie1',
        'categorie2',
        'categorie3',
        'categorie4',
        'photoitem1',
        'titreitem1',
        'descriptionitem1',
        'photoitem2',
        'titreitem2',
        'descriptionitem2',
        'photoitem3',
        'titreitem3',
        'descriptionitem3',
        'photoitem4',
        'titreitem4',
        'descriptionitem4',
        'photoitem5',
        'titreitem5',
        'descriptionitem5',
        'photoitem6',
        'titreitem6',
        'descriptionitem6',
        'photoitem7',
        'titreitem7',
        'descriptionitem7',
        'photoitem8',
        'titreitem8',
        'descriptionitem8',
        'photoitem9',
        'titreitem9',
        'descriptionitem9'
    ];

}

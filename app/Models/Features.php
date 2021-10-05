<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable = [
        'titrefeatures',
        'soustitrefeatures',
        'imgfeature1',
        'titrefeature1',
        'descriptionfeature1',
        'item1feature1',
        'item2feature1',
        'item3feature1',
        'imgfeature2',
        'titrefeature2',
        'descriptionfeature2',
        'textfeature2',
        'imgfeature3',
        'titrefeature3',
        'descriptionfeature3',
        'item1feature3',
        'item2feature3',
        'item3feature3',
        'imgfeature4',
        'titrefeature4',
        'descriptionfeature4',
        'textfeature4'
    ];
}

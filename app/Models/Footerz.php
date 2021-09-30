<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerz extends Model
{
    use HasFactory;
    
    protected $table = 'footerzs';

    protected $fillable = [
        'titre',
        'adress',
        'ville',
        'pays',
    ];
}

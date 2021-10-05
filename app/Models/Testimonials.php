<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    
    protected $table = 'testimonials';

    protected $fillable = [
            "titre",
            "sous_titre",
            "avis1",
            "photoavis1",
            "nomavis1",
            "workavis1",
            "avis2",
            "photoavis2",
            "nomavis2",
            "workavis2",
            "avis3",
            "photoavis3",
            "nomavis3",
            "workavis3",
            "avis4",
            "photoavis4",
            "nomavis4",
            "workavis4",
            "avis5",
            "photoavis5",
            "nomavis5",
            "workavis5"
    ];
}

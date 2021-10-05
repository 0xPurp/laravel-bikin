<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerz extends Model
{
    use HasFactory;
    
    protected $table = 'footerzs';

    protected $fillable = [
        "titre",
        "adress",
        "ville",
        "pays",
        "phonebold",
        "phone",
        "mailbold",
        "mail",
        "linksbold",
        "link1",
        "link2",
        "link3",
        "link4",
        "link5",
        "servicebold",
        "service1",
        "service2",
        "service3",
        "service4",
        "service5",
        "newsletterbold",
        "newsletter",
        "btnnews",
        "copyright1",
        "copyright2",
        "copyright3",
        "designed1",
        "designed2",
        "designedlin"
    ];
}

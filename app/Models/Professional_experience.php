<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional_experience extends Model
{
    use HasFactory;


    protected $fillable = [
        'name_position',
        'company',
        'date_of_entry', 
        'out_date',
        'title_1',
        'title_2',
        'title_3',
        'title_4',
        'title_5',
    ];
}

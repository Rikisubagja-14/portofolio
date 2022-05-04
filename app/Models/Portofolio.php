<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_app',
        'city_clint',
        'categoty',
        'project_date',
        'project_url',
        'image_project'
    ];
}

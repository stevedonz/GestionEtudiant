<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adresse extends Model
{
    use HasFactory;
     protected $fillable = ['country', 'city', 'residential_area'];
}

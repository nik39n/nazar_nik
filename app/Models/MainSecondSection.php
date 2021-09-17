<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSecondSection extends Model
{
    use HasFactory;
    protected $fillable = [ 
    "id",
    "image",
    "description",
    "position"
    ];
    protected $table = 'main_second_sections';
}

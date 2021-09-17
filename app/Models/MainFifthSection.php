<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainFifthSection extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "image",
    "position"
    ];
    protected $table = 'main_fifth_sections';
}

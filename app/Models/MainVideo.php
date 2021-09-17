<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainVideo extends Model
{
    protected $fillable = [ "id",
    "link"
    ];
    protected $table = 'main_videos';
    use HasFactory;
}

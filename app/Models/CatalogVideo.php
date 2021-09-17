<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogVideo extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "link"
    ];
    protected $table = 'main_videos';
}

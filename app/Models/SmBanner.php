<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmBanner extends Model
{
    protected $fillable = [ "id",
    "image"
    ];
    protected $table = 'sm_banners';
    use HasFactory;
}

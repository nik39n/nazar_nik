<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainFirstSection extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "image",
    "position"
    ];
    protected $table = 'main_first_sections';
}

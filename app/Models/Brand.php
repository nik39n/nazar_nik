<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [ 
    "id",
    "name",
    "meta_key_words",
    "meta_descriptions"
    ];
    protected $table = 'brand';
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

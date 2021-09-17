<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "name",
    "status",
    "meta_key_words",
    "meta_descriptions"
    ];
    protected $table = 'category';
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}

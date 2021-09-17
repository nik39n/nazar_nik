<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Characteristics extends Model
{
    use HasFactory;
    protected $fillable = [ 
    "id",
    "name",
    "position_in_product",
    "typeProduct_id"
    ];
    protected $table = 'characteristics';
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

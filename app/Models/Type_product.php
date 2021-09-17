<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Type_product extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "name"
    ];
    protected $table = 'type_product';
    public function products()
    {
        return $this->hasMany(Product::class,'typeProduct_id', 'id');
    }
}

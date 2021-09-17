<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "product_id",
    "image",
    "isdefaultImg"
    ];
    protected $table = 'images';
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Collections extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "id",
        "name"
        ];
        protected $table = 'collections';
        public function products()
        {
            return $this->hasMany(Images::class);
        }
}

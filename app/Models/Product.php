<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Season;
use App\Models\Characteristics;
use App\Models\Images;
use App\Models\Video_links;
use App\Models\Type_product;
use App\Models\Brand;
use App\Models\Collections;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 
    "id",
    "name_product",
    "price",
    "price_hire",
    "brand_id",
    "stock",
    "collection_id",
    "year",
    "typeProduct_id",
    "description",
    "about",
    "meta_key_words",
    "meta_descriptions",
    "urlForSite",
    "articul",
    "price-hire_text"
    ];
    protected $table = 'product';
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function seasons()
    {
        return $this->belongsToMany(Season::class);
    }
    public function characteristics()
    {
        return $this->belongsToMany(Characteristics::class);
    }
    public function images()
    {
        return $this->hasMany(Images::class);
    }
    public function videos()
    {
        return $this->hasMany(Video_links::class);
    }
    public function type_products()
    {
        return $this->belongsTo(Type_product::class, 'id','typeProduct_id');
    }
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }
    public function collection()
    {
        return $this->belongsTo(Collections::class);
    }
    
}

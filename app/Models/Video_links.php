<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_links extends Model
{
    use HasFactory;
    protected $fillable = [ "id",
    "id_product",
    "link"
    ];
    protected $table = 'video_links';
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

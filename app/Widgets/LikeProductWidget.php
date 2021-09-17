<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Type_product;

class LikeProductWidget extends AbstractWidget
{
    public $id = 1;
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [

    ];
    

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $type=Type_product::find($this->id);
        $products=$type->products()->paginate(3);
        return view('widgets.like_product_widget',compact("products"));
    }
}

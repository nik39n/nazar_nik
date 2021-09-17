<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Product;

class LastViewedWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $products=Product::take(4)->get();
        return view('widgets.last_viewed_widget',compact("products"));
    }
}

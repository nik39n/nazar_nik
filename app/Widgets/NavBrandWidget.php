<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Brand;

class NavBrandWidget extends AbstractWidget
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

        $brands= Brand::all();
        return view('widgets.nav_brand_widget',compact("brands"));
    }
}

<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Collections;

class NavCollectionWidget extends AbstractWidget
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

        $collections= Collections::all();
        return view('widgets.nav_collection_widget',compact("collections"));
    }
}

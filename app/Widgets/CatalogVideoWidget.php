<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\CatalogVideo;

class CatalogVideoWidget extends AbstractWidget
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
        //

        $catalog_video= CatalogVideo::all();
        return view('widgets.catalog_video_widget',compact("catalog_video"));
    }
}

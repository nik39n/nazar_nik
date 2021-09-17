<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\SmBanner;

class SmBannerWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'page_id' => ''
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        $small= SmBanner::all();
        return view('widgets.sm_banner_widget',compact("small"));
    }
}

<?php
 
namespace App\Widgets;
 
use Arrilot\Widgets\AbstractWidget;
use App\Models\SmBanner;
 
class DisqusWidget extends AbstractWidget
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
        $mainvideo= SmBanner::all();
        return view('widgets.disqus_widget',compact("mainvideo"));
    }
}

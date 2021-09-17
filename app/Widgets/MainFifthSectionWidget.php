<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\MainFifthSection;

class MainFifthSectionWidget extends AbstractWidget
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

        $fifth_section= MainFifthSection::all();
        return view('widgets.main_fifth_section_widget',compact("fifth_section"));
    }
}

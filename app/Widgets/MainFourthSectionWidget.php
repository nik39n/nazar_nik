<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\MainFourthSection;

class MainFourthSectionWidget extends AbstractWidget
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

        $fourth_section= MainFourthSection::orderBy("position")->get();
        return view('widgets.main_fourth_section_widget',compact("fourth_section"));
    }
}


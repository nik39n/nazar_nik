<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\MainSecondSection;

class MainSecondSectionWidget extends AbstractWidget
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

        $second_section= MainSecondSection::orderBy("position")->get();
        return view('widgets.main_second_section_widget',compact("second_section"));
    }
}

<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\MainThirdSection;

class MainThirdSectionWidget extends AbstractWidget
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

        $third_section= MainThirdSection::orderBy("position")->get();
        return view('widgets.main_third_section_widget',compact("third_section"));
    }
}

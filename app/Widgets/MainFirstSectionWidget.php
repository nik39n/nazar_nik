<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\MainFirstSection;

class MainFirstSectionWidget extends AbstractWidget
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

        $first_section= MainFirstSection::orderBy("position")->get();
        return view('widgets.main_first_section_widget',compact("first_section"));
    }
}

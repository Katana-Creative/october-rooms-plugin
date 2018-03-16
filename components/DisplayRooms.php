<?php namespace Katana\Rooms\Components;

use Cms\Classes\ComponentBase;
use Katana\Rooms\Models\Room;

class DisplayRooms extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'DisplayRooms Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     *
     */
    public function onRender()
    {
        $this->page["rooms"] = Room::all();
    }

}
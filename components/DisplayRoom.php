<?php namespace Katana\Rooms\Components;

use Cms\Classes\ComponentBase;
use Katana\Rooms\Models\Room;

class DisplayRoom extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'DisplayRoom Component',
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

        $slug = $this->param('room-slug');

        $room = Room::where('slug', $slug)->first();

        $this->page["room"] = $room;

        ///some seo
        $this->page->title = $room->name;

        $this->page->meta_description = strip_tags($room->description);

    }

}
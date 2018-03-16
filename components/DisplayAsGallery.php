<?php namespace Katana\Rooms\Components;

use Cms\Classes\ComponentBase;
use Katana\Rooms\Models\Room;

class DisplayAsGallery extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'DisplayAsGallery Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRender()
    {
        $slug = $this->param('room-slug');

        $this->page["rooms"] = Room::where('slug','!=', $slug)->get();
    }

}
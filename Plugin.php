<?php namespace Katana\Rooms;

use Backend;
use System\Classes\PluginBase;

/**
 * Rooms Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Rooms',
            'description' => 'This plugin provides the logic of managing the rooms and the pictures from backend',
            'author'      => 'Katana London',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {


        return [
            'Katana\Rooms\Components\DisplayRooms' => 'DisplayRooms',
            'Katana\Rooms\Components\DisplayRoom' => 'DisplayRoom',
            'Katana\Rooms\Components\DisplayAsGallery' => 'DisplayAsGallery',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'katana.rooms.some_permission' => [
                'tab' => 'Rooms',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {


        return [
            'rooms' => [
                'label'       => 'Rooms',
                'url'         => Backend::url('katana/rooms/rooms'),
                'icon'        => 'icon-leaf',
                'permissions' => ['katana.rooms.*'],
                'order'       => 500,
            ],
        ];
    }

}

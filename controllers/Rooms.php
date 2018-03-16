<?php namespace Katana\Rooms\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Rooms Back-end Controller
 */
class Rooms extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Katana.Rooms', 'rooms', 'rooms');
    }
}
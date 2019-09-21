<?php namespace Samuelerhini\Floppiess\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Floppiess extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Samuelerhini.Floppiess', 'main-menu-item');
    }
}

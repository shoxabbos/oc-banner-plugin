<?php namespace Shohabbos\Banner\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Places extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_places' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shohabbos.Banner', 'banner-main', 'banner-places');
    }
}

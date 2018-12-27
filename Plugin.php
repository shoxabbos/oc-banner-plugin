<?php namespace Shohabbos\Banner;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shohabbos\Banner\Components\Place' => 'bannerPlace',
    	];
    }

    public function registerSettings()
    {
    }
}

<?php namespace Shohabbos\Banner\Models;

use Model;

/**
 * Model
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_banner_banners';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    
    public $belongsToMany = [
        'places' => [Place::class, 'table' => 'shohabbos_banner_place_banner']
    ];
}

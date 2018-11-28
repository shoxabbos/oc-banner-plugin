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
}

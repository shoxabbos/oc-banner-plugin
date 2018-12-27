<?php namespace Shohabbos\Banner\Models;

use Model;

/**
 * Model
 */
class Place extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_banner_places';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'banners' => [Banner::class, 'table' => 'shohabbos_banner_place_banner']
    ];


    public function loadBanner() {
        $banner = $this->banners()->inRandomOrder()->first();

        if ($banner) {
            $banner->increment('views');
        }

        return $banner;
    }

}

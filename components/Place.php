<?php namespace Shohabbos\Banner\Components;

use Cms\Classes\ComponentBase;
use Shohabbos\Banner\Models\Place as BannerPlace;

class Place extends ComponentBase
{
    
    public $place;

    /**
     * Message to display when there are no messages.
     * @var string
     */
    public $noBannerMessage;

    public function componentDetails()
    {
        return [
            'name'        => 'shohabbos.banner::lang.settings.place_title',
            'description' => 'shohabbos.banner::lang.settings.place_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'placeId' => [
                'title'       => 'shohabbos.banner::lang.place_id.title',
                'description' => 'shohabbos.banner::lang.place_id.description',
                'type'        => 'dropdown'
            ],
            'noBannerMessage' => [
                'title'        => 'shohabbos.banner::lang.no_banner.title',
                'description'  => 'shohabbos.banner::lang.no_banner.description',
                'type'         => 'string',
                'default'      => 'No banner found',
                'showExternalParam' => false
            ],
        ];
    }

    public function onRender() {
        $this->noBannerMessage = $this->page['noBannerMessage'] = $this->property('noBannerMessage');
        $this->place = $this->page['place'] = BannerPlace::find($this->property('placeId'));

        if ($this->place) {
            $this->page['banner'] = $this->place->loadBanner();
        }
    }


    public function getPlaceIdOptions() {
        return BannerPlace::orderBy('title')->lists('title', 'id');
    }
}

<?php


namespace Codeclutch\Outfit\Components;

use Codeclutch\Outfit\Models\Gallery as GalleryModel;
use Cms\Classes\ComponentBase;
use Lang;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.gallery.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.gallery.description'),
        ];
    }

    public function onRun()
    {
        $slug = $this->param('slug');
        $this->page['gallery'] = GalleryModel::where('slug', $slug)->first();

        /* to prevent __SELF__ bugs */
        $this->page['image_width'] = $this->property('image_width');
        $this->page['image_height'] = $this->property('image_height');
    }

    public function defineProperties()
    {
        return [
            'image_height' => [
                'title'             => Lang::get('codeclutch.base::lang.plugin.components.gallery.height.name'),
                'description'       => Lang::get('codeclutch.base::lang.plugin.components.gallery.height.description'),
                'default'           => 'auto',
                'type'              => 'string',
            ],
            'image_width' => [
                'title'             => Lang::get('codeclutch.base::lang.plugin.components.gallery.height.name'),
                'description'       => Lang::get('codeclutch.base::lang.plugin.components.gallery.height.description'),
                'default'           => 'auto',
                'type'              => 'string',
            ]
        ];
    }
}

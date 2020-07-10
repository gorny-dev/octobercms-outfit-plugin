<?php


namespace Codeclutch\Outfit\Components;

use Cms\Classes\ComponentBase;
use Codeclutch\Outfit\Models\Slider as SliderModel;
use Lang;

class Slider extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.slider.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.slider.description')
        ];
    }

    public function onRender()
    {
        $id = $this->property('id');
        $this->page['slider'] = SliderModel::where('id', $id)->first();
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title' => Lang::get('codeclutch.base::lang.plugin.slider.id'),
                'default' => 1,
                'type' => 'dropdown',
            ],
        ];
    }

    public function getIdOptions()
    {
        $sliders = SliderModel::all();
        if ($sliders) {
            foreach ($sliders as $key => $slider) {
                $arr[$slider->id] = $slider->title;
            }
            return $arr;
        } else {
            return [];
        }
    }
}

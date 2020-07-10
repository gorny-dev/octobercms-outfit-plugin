<?php namespace Codeclutch\Outfit;

use Backend;
use Illuminate\Support\Facades\Lang;
use System\Classes\PluginBase;

/**
 * Outfit Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.description'),
            'author' => Lang::get('codeclutch.outfit::lang.plugin.author'),
            'icon' => 'icon-at'
        ];
    }

    public function registerComponents()
    {
        $path = 'Codeclutch\Outfit\Components';
        return [
            $path.'\News' => 'news',
            $path.'\Post' => 'post',
            $path.'\Page' => 'page',
            $path.'\Gallery' => 'gallery',
            $path.'\Slider' => 'slider'
        ];
    }
}

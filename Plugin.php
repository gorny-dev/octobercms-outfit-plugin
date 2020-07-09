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
        return [
            'Codeclutch\Outfit\Components\News' => 'news',
            'Codeclutch\Outfit\Components\Post' => 'post',
            'Codeclutch\Outfit\Components\Page' => 'page'
        ];
    }
}

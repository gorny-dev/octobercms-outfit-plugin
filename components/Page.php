<?php


namespace Codeclutch\Outfit\Components;

use Cms\Classes\ComponentBase;
use Lang;

class Page extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.page.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.page.description'),
        ];
    }
}

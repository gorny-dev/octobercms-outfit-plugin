<?php

namespace Codeclutch\Outfit\Components;

use Cms\Classes\ComponentBase;
use Lang;
use Codeclutch\Outfit\Models\Page as PageModel;

class Page extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.page.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.page.description'),
        ];
    }

    public function getPagesList()
    {
        return PageModel::all();
    }

    public function onRun()
    {
        $slug = $this->param('slug');
        $this->page['page'] = PageModel::where('slug', $slug)->first();
    }
}

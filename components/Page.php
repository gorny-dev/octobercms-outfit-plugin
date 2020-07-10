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
        if ($this->param('slug')) {
            $slug = $this->param('slug');
        } else {
            $slug = $this->property('slug');
        }
        $this->page['page'] = PageModel::where('slug', $slug)->first();
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Slug',
                'default' => 'auto',
                'type' => 'dropdown',
            ]
        ];
    }

    public function getSlugOptions()
    {
        $pages = PageModel::all();
        if ($pages) {
            foreach ($pages as $key => $page) {
                $arr[$page->id] = $page->title;
            }
            return $arr;
        } else {
            return [];
        }
    }
}

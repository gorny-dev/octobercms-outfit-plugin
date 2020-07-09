<?php

namespace Codeclutch\Outfit\Components;

use Cms\Classes\ComponentBase;
use Codeclutch\Outfit\Models\Post;
use Lang;

class News extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.news.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.news.description'),
        ];
    }

    public function getNews()
    {
        return Post::all()->sortByDesc('created_at');
    }
}

<?php
namespace Codeclutch\Outfit\Components;

use Cms\Classes\ComponentBase;
use Codeclutch\Outfit\Models\Post as PostModel;

class Post extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => Lang::get('codeclutch.outfit::lang.plugin.post.name'),
            'description' => Lang::get('codeclutch.outfit::lang.plugin.post.description'),
        ];
    }

    public function onRun()
    {
        $slug = $this->param('slug');
        $this->page['post'] = PostModel::where('slug', $slug)->first();
    }
}

## In order to create own frontend views
> Create partial called <your_name>.htm in _partials_ directory

> At the page you need to display component page add [component] 

~~~~ 
[post]
==
{% partial 'post' %}
~~~~

> In your partial file copy everything from 

>_'plugins/codeclutch/outfit/components/news/default.htm'_

> and use your own styles and preferences.

Check in components/Component.php how Collections are called fe.

in Post.php
~~~~
$this->page['post'] = PostModel::where('slug', $slug)->first();
~~~~
so you use in partial.htm
~~~~
{{post.title}}
{{post.short_description}}
{{post.content|raw}}

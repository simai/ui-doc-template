---
extends: _core._layouts.documentation
section: content
title: Extending Parent Templates
description: Extending Parent Templates
---

# Extending Parent Templates

To display each of your collection items on their own page, you need to specify a parent template. You can do this in
the `extends` key of the YAML front matter, or with the `@extends` directive in a Blade file:


> my-first-post.md

```yaml 
---
extends: _layouts.post
title: My First Blog Post
author: Keith Damiani
date: 2017-03-23
section: content
---

This post is *profoundly* interesting.
```

> my-second-post.blade.php

```yaml

---
title: My Second Blog Post
author: Keith Damiani
date: 2017-03-25
section: content
---
@extends ('_layouts.post')

This is {{ $page->author }}'s second <strong>amazing</strong> post.
```

## Collection items with no parent template

However, parent templates are optional for collection items. In some cases—such as for a collection of staff bios that
appear on an “About Us” page—you may not need to display each of your collection items on their own pages. To do this,
simply omit the extends key from the YAML front matter, or the `@extends` directive from a Blade file.

## Collection items with multiple parent templates

Collection items can also extend *multiple* parent templates, by specifying the templates as an array in the `extends`
key
in the YAML front matter. This will generate a separate URL for each template—allowing, for example, a collection item
to have both `/web/item` and `/api/item` endpoints, or `/summary` and `/detail` views.

> _people/abraham-lincoln.md


```yaml
---
name: Abraham Lincoln
role: President
number: 16
extends:
web: _layouts.person
api: _layouts.api.person
section: content
---
...
```


> _layouts.person.blade.php


```yaml
@extends('_layouts.master')

@section('body')
<header>
<h1>{{ $page->name }}</h1>
<h2>{{ $page->role }}</h2>
</header>

@yield('content')

@endsection
```


> _layouts.api.person.blade.js


```yaml
{ !! $page->api() !! }
```

If using multiple parent templates, you can specify separate paths in `config.php` for each resulting page:

> config.php

```php 
<?php

use Illuminate\Support\Str;

return [
    'collections' => [
        'people' => [
            'path' => [
                'web' => 'people/{number}/{filename}',
                'api' => 'people/api/{number}/{filename}',
            ],
            'api' => function ($page) {
                return [
                    'slug' => Str::slug($page->getFilename()),
                    'name' => $page->name,
                    'number' => $page->number,
                    'content' => $page->getContent(),
                ];
            },
        ],
    ],
];
```

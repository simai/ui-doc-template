---
extends: _core._layouts.documentation
section: content
title: Коллекции
description: Коллекции
---

# Коллекции

!example
Пример компонента example с парсером markdown
!endexample

Jigsaw предоставляет мощные возможности для работы с группами связанных страниц или коллекциями. Коллекции дают вам
возможность доступа к вашему контенту на агрегированном уровне, что позволяет легко добавлять почти динамические функции, такие как меню,
Пагинация, категории и теги на ваш статический сайт.

Коллекции можно использовать для создания страниц со связанным контентом, например записей в блогах или статей, отсортированных по
date, с индексной страницей, отображающей краткие сведения о пяти последних публикациях, или для встраивания связанных блоков контента.
на странице для такого контента, как биографии сотрудников, описания продуктов или портфолио проектов.

## Определение коллекции

Чтобы определить коллекцию, добавьте в config.php массив с именем collections. Каждая коллекция должна быть обозначена названием
коллекция (как правило, во множественном числе), за которой следует массив настроек. Например:

> config.php

```php 
<?php

return [
    'company' => 'Tighten',
    'contact_email' => 'support@tighten.co',
    'collections' => [
        'people' => [
            'path' => 'people',
            'sort' => 'last_name',
        ],
        'posts' => [
            'path' => 'blog/{date|Y-m-d}/{filename}',
            'author' => 'Tighten',
        ],
    ],
];
```

Jigsaw будет искать элементы коллекции в каталоге с тем же именем, что и ваша коллекция, перед которым стоит символ подчеркивания:
В этом примере `_people` и `_posts`. Элементами коллекции могут быть файлы Markdown или Blade, или даже гибрид Blade/Markdown
Файлы.

<div class="files">
    <div class="folder folder--open">source
        <div class="folder">_assets</div>
        <div class="folder folder--open">_layouts
            <div class="file">master.blade.php</div>
            <div class="file">post.blade.php</div>
        </div>
        <div class="folder folder--open">_people
            <div class="file">george-michael-bluth.blade.php</div>
            <div class="file">j-walter-weatherman.blade.php</div>
            <div class="file">steve-holt.blade.php</div>
        </div>
        <div class="folder folder--open focus">_posts
            <div class="file">1-my-first-post.md</div>
            <div class="file">2-my-second-post.md</div>
            <div class="file">3-my-third-post.md</div>
        </div>
        <div class="folder">assets</div>
        <div class="file">about-us.blade.php</div>
        <div class="file">blog.blade.php</div>
        <div class="file">index.blade.php</div>
    </div>
    <div class="folder">tasks</div>
    <div class="folder">vendor</div>
    <div class="file">bootstrap.php</div>
    <div class="file">composer.json</div>
    <div class="file">composer.lock</div>
    <div class="file">config.php</div>
    <div class="file">package.json</div>
    <div class="file">webpack.mix.js</div>
</div>

В `config.php`, массив, в котором вы определяете свою коллекцию, может содержать параметры пути и сортировки для коллекции, как
а также переменные и вспомогательные функции. Однако ни один из этих элементов не является обязательным; если опущено, путь по умолчанию и сортировка
Будут использоваться настройки. На самом деле, для простейшей конфигурации с использованием настроек по умолчанию и без переменных или функций, вы
может определить коллекцию с помощью простого ее имени:

> config.php

```php 
<?php

return [
    'collections' => [ 'posts' ],
];
```

## Создание страниц коллекций

Если вы хотите создать отдельную страницу для каждого элемента коллекции, выполните следующие действия. `example`, страница для каждого блога
post — указываем файл родительского шаблона в ключе extends переднего элемента YAML или с помощью метода `@extends` в директиве
Пилкой лезвия, так же, как вы делаете это с обычной страницей лобзика. Например:

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

> _layouts/post.blade.php

```blade 
@extends('_layouts.master')

@section('body')
<h1>{{ $page->title }}</h1>
<p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    @yield('content')

@endsection
```

## Доступ к элементам коллекции

В любом шаблоне Blade у вас есть доступ к каждой из ваших коллекций с помощью переменной с именем коллекции. Этот
Переменная ссылается на объект, который содержит все элементы в вашей коллекции и может быть переведен для доступа
отдельные предметы коллекции. Переменная collection также ведет себя так, как если бы это была коллекция Illuminate в Laravel,
это означает, что у вас есть доступ ко всем стандартным методам сбора данных Laravel, таким как `count()`, `filter()`и `where()`.

Например, чтобы создать список заголовков для всех записей блога, можно выполнить итерацию по объекту $posts в блейде
`@foreach` и отобразить параметр `title` свойство, которое вы определили в заголовке YAML каждой записи:
> posts.blade.php

```blade 
<p>Total of {{ $posts->count() }} posts</p>

<ul>
@foreach ($posts as $post)
    <li>{{ $post->title }}</li>
@endforeach
</ul>
```

Например, предполагая, что все посты имеют на своем YAML-фронте значение свойства `author`, чтобы отфильтровать все сообщения из тега
конкретного автора, вы можете отфильтровать коллекцию `$posts` и сгенерируйте новую коллекцию:

> author_posts.blade.php

```blade 
@php
$authorPosts = $posts->filter(function ($value, $key) use ($page) {
return $value->author == $page->author;
});
@endphp

@if ($authorPosts->count() > 0)
<ul>
@foreach ($authorPosts as $post)
<li>{{ $post->title }}</li>
@endforeach
</ul>
@endif
```

## Метаданные коллекции

В дополнение к метаданным, доступным для каждой страницы, таким как `getPath()`, `getUrl()`и `getFilename()`коллекция
Элементы
имеют доступ к нескольким дополнительным функциям:
!links

- `getContent()` возвращает основное содержимое элемента коллекции, т.е. тело файла Markdown (в настоящее время
  `getContent()` доступно только для файлов Markdown)
- `getCollection()` возвращает имя коллекции
- `getPrevious()` и `getNext()` Укажите смежные элементы в коллекции в соответствии с сортировкой коллекции по умолчанию
  порядок
- `getFirst()` возвращает первый элемент коллекции (как это делает метод коллекции Laravel `first()`)
- `getLast()` возвращает последний элемент коллекции (как это делает метод коллекции Laravel `last()`)

!endlinks

> _layouts/post.blade.php

```blade 
@extends('_layouts.master')

@section('body')
<h1>{{ $page->title }}</h1>

    @yield('content')

    @if ($page->getNext())
        <p>Read my next post:
            <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
        </p>
    @endif

@endsection
```

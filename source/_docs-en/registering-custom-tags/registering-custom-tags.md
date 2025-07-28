---
extends: _core._layouts.documentation
section: content
title: Registering Custom Tags
description: Registering Custom Tags
---

# Registering Custom Tags via Config

This system allows you to define and register custom tag classes by specifying their short names (class names without
namespace) in the configuration.

## Define your tags in the config

In your `config.php` file (or wherever you store custom configuration):

```php 
return [
'tags' => [
'ExampleTag',
'LinksTag',
'TestTag',
],
];
```

> These must be class names without `namespace`, e.g., '`ExampleTag`', not `App\Helpers\Tags\ExampleTag`.

## Tag class structure

Each tag class must implement the `CustomTagInterface`. Here’s an example:

```php 
<?php

namespace App\Helpers\Tags;

use App\Helpers\CustomTagInterface;

class ExampleTag implements CustomTagInterface
{
    public function getPattern(): string
    {
        return '/!example\s*\n([\s\S]*?)\n!endexample/';
    }

    public function getTemplate(string $template): string
    {
        return "<div class=\"example overflow-hidden radius-1/2 overflow-x-auto\">{$template}</div>";
    }
}
```

## Interface contract

The tag class must define two methods:
!links

- `getPattern()`    Returns a regex pattern to match the custom tag in raw Markdown.
- `getTemplate()`    Receives matched content and returns a rendered HTML snippet.
  !endlinks

## How it works

1. Before the Markdown is rendered, we intercept the raw content using a custom Markdown handler (bound in
   `bootstrap.php`).

2. Each registered tag is matched using its `getPattern()` method.

3. The matched content is passed to the tag’s `getTemplate()` method, and replaced with the resulting HTML.

4. Then the modified Markdown is passed to the core `Jigsaw Markdown processor`.

This ensures you can extend the Markdown syntax safely without modifying the core renderer.

```php 
$namespace = 'App\\Helpers\\Tags\\';
$tags = $jigsaw->getConfig('tags', []);
$instances = [];

foreach ($tags as $shortName) {
$className = $namespace . $shortName;

    if (class_exists($className)) {
        $instances[] = new $className();
    }
}

TagRegistry::register($instances);
```

This approach gives you the flexibility to define only the tag class names, while keeping the instantiation logic
centralized.

## Summary

With this approach, you can define your own custom block syntaxes like:

```yaml
!example
Some markdown inside a custom block.
!endexample
```

And have it automatically rendered into custom HTML:

```html

<div class="example overflow-hidden radius-1/2 overflow-x-auto">
    Some markdown inside a custom block.
</div>
```

## Folder structure

Your tag classes should live under:


<div class="files">
    <div class="folder folder--open">Tags
        <div class="file">ExampleTag1.php</div>
        <div class="file">ExampleTag2.php</div>
        <div class="file">ExampleTag3.php</div>
    <div class="ellipsis">...</div>
    </div>
</div>

Each class should follow a consistent interface/structure (depending on your TagRegistry requirements).

## Namespace change

> If your tags are located in a different namespace or folder, just change the `$namespace` variable in `bootstrap.php`
> accordingly:

```php 
$namespace = 'App\\MyCustom\\Tags\\';
```

## Adding Classes to HTML Elements via Markdown Syntax

This snippet post-processes your HTML after Markdown rendering to support "inline class assignments" using the (
`.class1.class2`) or (`.foo, .bar`) syntax.

```yaml
This is some text. (.class1.class2)
```

or

```yaml
- List item text (.foo,.bar)
```

It works for ANY HTML element (paragraphs, lists, headings, etc).
If the element’s content ends with (`.class1.class2`) or (`.foo, .bar`), these classes will be added to the element, and
the (`.class...`) part will be removed from the output.

### How to Use

Run this code on your `$content` immediately after `Markdown` parsing (when you have HTML, but before rendering).

Classes will be added to ANY HTML element, only if the class expression is directly at the end of that element’s
content.

### Example

Markdown:

```yaml
This is a warning message. (.warning.red)
```

After Markdown and this post-process:

```html
<p class="warning red">This is a warning message.</p>
```

Or in a list:

```yaml 
- Click here to continue (.next-step.big)
```

```html

<li class="next-step big">Click here to continue</li>
```

> Tip:
> This works for any element.
> Just make sure the (`.class1.class2`) appears inside the same `paragraph/list/block` as your target text, with no empty
> lines in between.

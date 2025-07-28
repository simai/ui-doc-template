---
extends: _core._layouts.documentation
section: content
title: Multilingualism
description: Multilingualism
---

# Multilingual Support in Documentation

Your documentation system is built with first-class multilingual support, powered by the `Configurator` class and
structured folder conventions.

## Folder Structure per Locale

Each locale has its own folder under:

```bash
source/_docs-<locale>/
```

> Examples:

```bash
source/_docs-ru/
source/_docs-en/
source/_docs-de/
source/_docs-es/
```

Each folder can contain:
!links

- `.settings.php` — page metadata (titles, order, custom menus)

- `.lang.php` — translation dictionary for UI phrases

- `index.md`, `intro.md`, etc. — actual documentation content

!endlinks

## Locale Configuration

In your `config.php`, locales are defined as:

```php
'locales' => [
'en' => 'English',
'ru' => 'Русский',
'de' => 'Deutsch',
'es' => 'Spanish',
],
'defaultLocale' => 'ru',
```

This provides:
!links

- A map of locale codes to their names

- A default locale to fall back to

!endlinks

## Locale-Aware Build via Configurator

When Jigsaw starts the build: (.test1.test2.test3)

1. The `Configurator` is initialized with the locale list:

    ```php
    
    $locales = $jigsaw->getConfig('locales');
    $configurator = new Configurator($locales);
    $jigsaw->setConfig('configurator', $configurator);
    ```
2. For each locale: (.links)
    - It loads `.lang.php` into `$translations[$locale]` (.test)
    - It loads all `.settings.php` into `$settings[$locale]`
    - It builds:
        - Nested menu: `$menu[$locale]`
        - Flat menu: `$flattenMenu[$locale]`
        - All pages: `$realFlatten[$locale]`

    
## Translations via `.lang.php`

Each locale folder may include a `.lang.php` file:

```php
return [
    'home' => 'Главная',
    'installation' => 'Установка',
    'next' => 'Далее',
    'prev' => 'Назад',
];
```

Then, in templates:

```php
{{ $page->translate('home') }}
```

Behind the scenes:

```php
$page->configurator->getTranslate('home', $page->locale());
```

## Language-aware Routing

Thanks to the folder structure and `Configurator` logic:
!links

- URLs are prefixed by locale, e.g.:

    ```bash
    /ru/guide/install
    /en/guide/install
    ```
- The locale is automatically extracted in `config.php` via:

    ```php
    'locale' => function ($page) {
        $path = str_replace('\\', '/', $page->getPath());
        $locale = explode('/', $path);
        $current = 'ru';
        $locales = array_keys($page->locales->toArray());
        foreach ($locale as $segment) {
            if (in_array($segment, $locales)) {
                $current = $segment;
                break;
            }
        }
        return $current;
    },
    ```

!endlinks

This means locale is inferred from the URL path or file location.

## Locale-Specific Menus and Navigation

> All menus are stored per locale:

```php 
$page->configurator->getMenu($page->locale())         // nested sidebar menu
$page->configurator->realFlatten[$page->locale()]     // all pages
$page->configurator->flattenMenu[$page->locale()]     // navigable pages
```

> And per-locale previous/next:

```php 
$page->configurator->getPrevAndNext($page->getPath(), $page->locale());
```
> Breadcrumbs are also localized:

```php

$page->configurator->generateBreadCrumbs($locale, $segments);
```



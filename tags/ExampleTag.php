<?php

namespace App\Helpers\Tags;

use App\Helpers\CustomTagInterface;

class ExampleTag implements CustomTagInterface
{
    public function getPattern(): string
    {
        return '/!example\s*\n([\s\S]*?)\n!endexample/';
    }

    public function getTemplate(string $innerHtml): string
    {
        return "<div class=\"example\">{$innerHtml}</div>";
    }

}

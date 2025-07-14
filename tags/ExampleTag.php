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

<?php

namespace App\Helpers\Tags;

use App\Helpers\CustomTagInterface;

class ListWrap implements CustomTagInterface
{
    public function getPattern(): string
    {
        return '/!links\s*\n([\s\S]*?)\n!endlinks/';
    }

    public function getTemplate(string $template): string
    {
        return "<div class=\"links\">{$template}</div>";
    }

}

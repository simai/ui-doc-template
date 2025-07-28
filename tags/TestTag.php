<?php

    namespace App\Helpers\Tags;

    use App\Helpers\CustomTagInterface;

    class TestTag implements CustomTagInterface {
        public function getPattern(): string
        {
            return '/!\s*([^\n!]+?)\s*!/u';
        }

        public function getTemplate(string $template): string
        {
            return "<div class=\"test\">{$template}</div>";
        }
    }

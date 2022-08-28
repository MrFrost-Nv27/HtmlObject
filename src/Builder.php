<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Builder
{
    public static function Create(HtmlElements $e, array|null $attr = null)
    {
        $namespace = "MrFrost\HtmlObject\Native\{$e->name}";
        return new $namespace($e, $attr);
    }

    public static function Render(BaseDom $base)
    {
        return $base->dom->saveHTML();
    }
}
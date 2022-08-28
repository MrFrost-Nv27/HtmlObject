<?php

namespace MrFrost\HtmlObject;

use Exception;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Builder
{
    public static function Create(HtmlElements $e, array|null $attr = null)
    {
        $namespace = "MrFrost\HtmlObject\Native\\{$e->name}";
        if (class_exists($namespace)) {
            return new $namespace($e, $attr);
        } else {
            throw new Exception("Elemen $e->name tidak tersedia");
        }
    }

    public static function Render(BaseDom $base)
    {
        return $base->dom->saveHTML();
    }
}
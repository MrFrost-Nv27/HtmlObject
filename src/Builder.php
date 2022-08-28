<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Builder extends BaseDom
{
    public static function Create(HtmlElements $e, array|null $attr = null)
    {
        return new parent($e, $attr);
    }
}
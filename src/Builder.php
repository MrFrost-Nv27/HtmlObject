<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Native\Header;
use MrFrost\HtmlObject\Native\HeaderElements;

class Builder
{
    public static function Header(HeaderElements $e, ...$params)
    {
        return new Header($e, ...$params);
    }
}
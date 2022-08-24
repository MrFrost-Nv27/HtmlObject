<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Native\Basic;
use MrFrost\HtmlObject\Native\BasicElements;
use MrFrost\HtmlObject\Native\Header;
use MrFrost\HtmlObject\Native\HeaderElements;

class Builder
{
    public static function Header(HeaderElements $e, ...$params)
    {
        return new Header($e, ...$params);
    }
    public static function Basic(BasicElements $e, ...$params)
    {
        return new Basic($e, ...$params);
    }
}
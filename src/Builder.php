<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Native\Basic;
use MrFrost\HtmlObject\Native\Formatting;
use MrFrost\HtmlObject\Native\Header;

class Builder
{
    public static function Header($e, ...$params)
    {
        return new Header($e, ...$params);
    }
    public static function Basic($e, ...$params)
    {
        return new Basic($e, ...$params);
    }
    public static function Formatting($e, ...$params)
    {
        return new Formatting($e, ...$params);
    }
}
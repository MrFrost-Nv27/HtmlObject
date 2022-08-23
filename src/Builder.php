<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Native\BasicElement;
use MrFrost\HtmlObject\Native\FormattingElement;
use MrFrost\HtmlObject\Native\ImagesElement;
use MrFrost\HtmlObject\Native\LinksElement;

class Builder
{
    public static function BasicElement(BasicElement $e, ...$params)
    {
        return new Base($e, ...$params);
    }
    public static function FormattingElement(FormattingElement $e, ...$params)
    {
        return new Base($e, ...$params);
    }
    public static function ImagesElement(ImagesElement $e, ...$params)
    {
        return new Base($e, ...$params);
    }
    public static function LinksElement(LinksElement $e, ...$params)
    {
        return new BaseLinks($e, ...$params);
    }
}
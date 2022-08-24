<?php

namespace MrFrost\HtmlObject;

use MrFrost\HtmlObject\Native\Formatting;
use MrFrost\HtmlObject\Native\FormattingElements;

class Formatter
{
    public static function Bold($content)
    {
        $format = new Formatting(FormattingElements::Bold);
        return $format->generate($content);
    }
    public static function Emphasized($content)
    {
        $format = new Formatting(FormattingElements::Emphasized);
        return $format->generate($content);
    }
    public static function Strong($content)
    {
        $format = new Formatting(FormattingElements::Strong);
        return $format->generate($content);
    }
    public static function Subscript($content)
    {
        $format = new Formatting(FormattingElements::Subscript);
        return $format->generate($content);
    }
    public static function Superscript($content)
    {
        $format = new Formatting(FormattingElements::Superscript);
        return $format->generate($content);
    }
}
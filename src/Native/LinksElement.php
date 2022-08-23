<?php

namespace MrFrost\HtmlObject\Native;

enum LinksElement: string
{
    case Hyperlink = 'a';
    case Link = 'link';

    public function isContainable(): bool
    {
        return match ($this) {
            self::Hyperlink => true,
            default => false,
        };
    }
}
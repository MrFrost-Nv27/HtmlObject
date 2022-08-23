<?php

namespace MrFrost\HtmlObject\Native;

enum FormattingElement: string
{
    case Bold = 'b';
    case Emphasized = 'em';
    case Strong = 'strong';
    case Subscript = 'sub';
    case Superscript = 'sup';

    public function isContainable(): bool
    {
        return match ($this) {
            default => true,
        };
    }
}
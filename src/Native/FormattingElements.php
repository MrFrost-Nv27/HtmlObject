<?php

namespace MrFrost\HtmlObject\Native;

enum FormattingElements: string
{
    case Bold = 'b';
    case Emphasized = 'em';
    case Strong = 'strong';
    case Subscript = 'sub';
    case Superscript = 'sup';

    public function isContainable(): bool
    {
        return match ($this) {
            default => true
        };
    }

    public function getType(): string
    {
        return match ($this) {
            default => "Formatting Element"
        };
    }
}
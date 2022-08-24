<?php

namespace MrFrost\HtmlObject\Native;

enum BasicElements: string
{
    case Paragraph = 'p';
    case Break = 'br';
    case HorizontalRule = 'hr';

    public function isContainable(): bool
    {
        return match ($this) {
            self::Paragraph => true,
            default => false
        };
    }

    public function getType(): string
    {
        return match ($this) {
            default => "Basic Element"
        };
    }
}
<?php

namespace MrFrost\HtmlObject\Native;

enum BasicElement: string
{
        // Header
    case Header1 = 'h1';
    case Header2 = 'h2';
    case Header3 = 'h3';
    case Header4 = 'h4';
    case Header5 = 'h5';
    case Header6 = 'h6';

        // Kalimat
    case Paragraph = 'p';
    case Break = 'br';
    case HorizontalRule = 'hr';

    public function isContainable(): bool
    {
        return match ($this) {
            self::Break, self::HorizontalRule
            => false,
            default => true,
        };
    }
}
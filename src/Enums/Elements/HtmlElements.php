<?php

namespace MrFrost\HtmlObject\Enums\Elements;

enum HtmlElements: string
{
        // Header
    case Header = 'h';
    case Header1 = 'h1';
    case Header2 = 'h2';
    case Header3 = 'h3';
    case Header4 = 'h4';
    case Header5 = 'h5';
    case Header6 = 'h6';

        // Semantic
    case Div = 'div';
    case Span = 'span';

        // Typing
    case Paragraph = 'p';
    case Strong = 'strong';
    case Emphasized = 'em';
    case Italic = 'i';
    case Subscript = 'sub';
    case Superscript = 'sup';

        // Links
    case Hyperlink = 'a';
    case Link = 'link';

        // Utils
    case Break = 'br';
    case HorizontalRule = 'hr';

    public function isContainable(): bool
    {
        return match ($this) {
            self::Break, self::HorizontalRule, self::Link => false,
            default => true
        };
    }

    public function isAppendable(): bool
    {
        return match ($this) {
            self::Header1, self::Header2, self::Header3, self::Header4, self::Header5, self::Header6,
            self::Strong, self::Emphasized, self::Italic, self::Subscript, self::Superscript
            => false,
            default => true
        };
    }
}
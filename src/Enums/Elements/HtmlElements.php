<?php

namespace MrFrost\HtmlObject\Enums\Elements;

enum HtmlElements: string
{
        // Header
    case Header = 'h4';

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
            self::Header, self::Strong, self::Emphasized, self::Italic, self::Subscript, self::Superscript
            => false,
            default => true
        };
    }
}
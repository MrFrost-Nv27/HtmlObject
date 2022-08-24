<?php

namespace MrFrost\HtmlObject\Native;

enum NativeElements: string
{
        // Basic
    case Header1 = 'h1';
    case Header2 = 'h2';
    case Header3 = 'h3';
    case Header4 = 'h4';
    case Header5 = 'h5';
    case Header6 = 'h6';
    case Paragraph = 'p';
    case Break = 'br';
    case HorizontalRule = 'hr';

        // Formatting
    case Bold = 'b';
    case Emphasized = 'em';
    case Strong = 'strong';
    case Subscript = 'sub';
    case Superscript = 'sup';

        // Images
    case Image = 'img';

        // Links
    case Hyperlink = 'a';
    case Link = 'link';

    public function isContainable(): bool
    {
        return match ($this) {
            self::Break, self::HorizontalRule, self::Image, self::Link
            => false,
            default => true,
        };
    }

    public function getType(): string
    {
        return match ($this) {
            self::Header1,
            self::Header2,
            self::Header3,
            self::Header4,
            self::Header5,
            self::Header6,
            self::Paragraph,
            self::Break,
            self::HorizontalRule
            => "Basic Element",
            self::Bold,
            self::Emphasized,
            self::Strong,
            self::Subscript,
            self::Superscript
            => "Formatting Element",
            self::Image
            => "Image Element",
            self::Hyperlink,
            self::Link
            => "Link Element"
        };
    }
}
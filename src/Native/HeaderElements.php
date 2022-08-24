<?php

namespace MrFrost\HtmlObject\Native;

enum HeaderElements: string
{
    case Header1 = 'h1';
    case Header2 = 'h2';
    case Header3 = 'h3';
    case Header4 = 'h4';
    case Header5 = 'h5';
    case Header6 = 'h6';

    public function isContainable(): bool
    {
        return match ($this) {
            default => true,
        };
    }

    public function getType(): string
    {
        return match ($this) {
            default => "Header Element"
        };
    }
}
<?php

namespace MrFrost\HtmlObject\Native;

enum ImagesElement: string
{
    case Image = 'img';

    public function isContainable(): bool
    {
        return match ($this) {
            default => false,
        };
    }
}
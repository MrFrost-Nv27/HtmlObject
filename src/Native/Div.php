<?php

namespace MrFrost\HtmlObject\Native;

use MrFrost\HtmlObject\BaseDom;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Div extends BaseDom
{
    public function __construct(
        public HtmlElements $element,
        public array|null $attr = null
    ) {
        new parent($element, $attr);
    }

    public function setText(string|int $text)
    {
        $this->body->textContent = $text;
    }
}
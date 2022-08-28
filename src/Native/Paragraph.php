<?php

namespace MrFrost\HtmlObject\Native;

use Exception;
use MrFrost\HtmlObject\BaseDom;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Paragraph extends BaseDom
{
    public function __construct(
        public HtmlElements $element,
        public array|null $attr = null
    ) {
        parent::__construct($element, $attr);
    }

    public function setText(string|int $text)
    {
        $this->body->textContent = $text;
    }
}
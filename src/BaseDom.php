<?php

namespace MrFrost\HtmlObject;

use DOMDocument;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class BaseDom
{
    public function __construct(
        public HtmlElements $element,
        public array|null $attr = null
    ) {
        $this->dom = new DOMDocument();
        $this->body = $this->dom
            ->append($this->dom->createElement($element->value));
    }
}
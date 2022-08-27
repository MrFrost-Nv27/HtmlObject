<?php

namespace MrFrost\HtmlObject;

use DOMDocument;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class BaseDom
{
    public function __construct(
        public HtmlElements|null $parent = null,
        public string|int|null $value = null
    ) {
        $this->dom = new DOMDocument();
        $this->firstNode = $parent ? $this->dom->append($this->dom->createElement($parent->value), $value ?? '') : null;
    }
}
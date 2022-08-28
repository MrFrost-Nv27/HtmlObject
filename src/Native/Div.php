<?php

namespace MrFrost\HtmlObject\Native;

use Exception;
use MrFrost\HtmlObject\BaseDom;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Div extends BaseDom
{
    public function __construct(
        public HtmlElements $element,
        public array|null $attr = null
    ) {
        parent::__construct($element, $attr);
    }

    public function setChildren(array $children)
    {
        foreach ($children as $child) {
            $this->dom->documentElement->appendChild($this->dom->importNode($child->dom->documentElement, true));
        }
    }

    public function setChild($child)
    {
        $this->dom->documentElement->appendChild($this->dom->importNode($child->dom->documentElement, true));
    }
}
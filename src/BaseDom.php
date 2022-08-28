<?php

namespace MrFrost\HtmlObject;

use DOMDocument;
use Exception;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class BaseDom
{
    public function __construct(
        public $element,
        array|null $attr = null
    ) {
        $this->dom = new DOMDocument();
        $this->body = $this->dom->createElement($element->value);
        $this->dom->append($this->body);
        foreach ($attr as $k => $v) {
            $method = 'set' . ucwords($k);
            if (method_exists($this, $method)) {
                $this->$method($v);
            } else {
                throw new Exception("Attribut $k tidak tersedia untuk elemen $element->name");
            }
        }
    }
}
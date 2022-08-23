<?php

namespace MrFrost\HtmlObject;

use RuntimeException;

class BaseLinks extends Base
{
    public function __construct(
        public $element,
        public string|null $url = null,
        public string|null $id = null,
        public array $class = [],
        public string $content = ""
    ) {
        $this->isContainable = $element->isContainable();
    }
}
<?php

namespace MrFrost\HtmlObject\Native;

use MrFrost\HtmlObject\HtmlElement;
use MrFrost\HtmlObject\Utils\ElementContainable;
use MrFrost\HtmlObject\Utils\HtmlClass;

class Basic extends HtmlElement
{
    use HtmlClass;
    use ElementContainable;
    public function __construct(
        public BasicElements $element,
        public string|null $id = null,
        public array $class = [],
        public string $content = ""
    ) {
        $this->isContainable = $element->isContainable();
    }
}
<?php

namespace MrFrost\HtmlObject\Native;

use MrFrost\HtmlObject\BaseDom;

class Div extends BaseDom
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
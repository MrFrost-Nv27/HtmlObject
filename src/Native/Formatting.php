<?php

namespace MrFrost\HtmlObject\Native;

use MrFrost\HtmlObject\HtmlElement;
use MrFrost\HtmlObject\Utils\ElementContainable;
use MrFrost\HtmlObject\Utils\HtmlClass;

class Formatting extends HtmlElement
{
    use HtmlClass;
    use ElementContainable;
    public function __construct(
        public FormattingElements $element,
        public string|null $id = null,
        public array $class = [],
        public string $content = ""
    ) {
        $this->isContainable = $element->isContainable();
    }
}
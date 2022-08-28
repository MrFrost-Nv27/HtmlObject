<?php

namespace MrFrost\HtmlObject\Native;

use Exception;
use MrFrost\HtmlObject\BaseDom;
use MrFrost\HtmlObject\Enums\Elements\HeaderElements;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Header extends BaseDom
{
    public function __construct(
        HtmlElements $header,
        public array|null $attr = null
    ) {
        $element = (isset($attr['level']) && ((1 <= $attr['level']) && ($attr['level'] <= 6))) ? $this->setLevel($attr['level']) : $header;
        unset($attr['level']);
        parent::__construct($element, $attr);
    }

    public function setLevel(int $level): HeaderElements
    {
        return match ($level) {
            1 => HeaderElements::Header1,
            2 => HeaderElements::Header2,
            3 => HeaderElements::Header3,
            4 => HeaderElements::Header4,
            5 => HeaderElements::Header5,
            6 => HeaderElements::Header6
        };
    }

    public function setText(string|int $text)
    {
        $this->body->textContent = $text;
    }
}
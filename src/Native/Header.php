<?php

namespace MrFrost\HtmlObject\Native;

use Exception;
use MrFrost\HtmlObject\BaseDom;
use MrFrost\HtmlObject\Enums\Elements\HtmlElements;

class Header extends BaseDom
{
    public function __construct(
        public HtmlElements $header,
        public array|null $attr = null
    ) {
        if ((isset($attr['level']) && ((1 <= $attr['level']) && ($attr['level'] <= 6)))) {
            $element = $this->setLevel($attr['level']);
            unset($attr['level']);
        } else {
            $element = HtmlElements::Header4;
        }
        parent::__construct($element, $attr);
    }

    public function setLevel(int $level): HtmlElements
    {
        return match ($level) {
            1 => HtmlElements::Header1,
            2 => HtmlElements::Header2,
            3 => HtmlElements::Header3,
            4 => HtmlElements::Header4,
            5 => HtmlElements::Header5,
            6 => HtmlElements::Header6
        };
    }

    public function setText(string|int $text)
    {
        $this->body->textContent = $text;
    }
}
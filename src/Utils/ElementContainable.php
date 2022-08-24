<?php

namespace MrFrost\HtmlObject\Utils;

use RuntimeException;

/**
 * HTML Class Manipulators
 */
trait ElementContainable
{
    public function setContent(string $content)
    {
        if (!$this->isContainable) {
            throw new RuntimeException("Elemen {$this->element->name} adalah elemen yang tidak dapat di isi");
        }
        $this->content = $content;
        return $this;
    }

    public function getContent(): string
    {
        return $this->isContainable ?
            sprintf("%s", $this->content) :
            throw new RuntimeException("Elemen {$this->element->name} adalah elemen yang tidak dapat di isi");
    }

    public function getOpenTag(): string
    {
        $result = $this->element->value;

        !empty($this->class) ?
            $result .= ' class="' . $this->getClass() . '"' :
            $result = $result;

        !empty($this->id) ?
            $result .= ' id="' . $this->id . '"' :
            $result = $result;

        return sprintf("<%s>", $result);
    }

    public function getCloseTag(): string
    {
        return sprintf("</%s>", $this->element->value);
    }

    public function generate(string $content = null): string
    {
        $this->setContent($content);
        return vsprintf("%s%s%s", [
            $this->getOpenTag(),
            $this->getContent(),
            $this->getCloseTag()
        ]);
    }
}
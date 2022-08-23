<?php

namespace MrFrost\HtmlObject;

use RuntimeException;

class Base
{
    public function __construct(
        public $element,
        public string|null $id = null,
        public array $class = [],
        public string $content = ""
    ) {
        $this->isContainable = $element->isContainable();
    }

    public function setContent(string $content)
    {
        if (!$this->isContainable) {
            throw new RuntimeException("Elemen {$this->element->name} adalah elemen yang tidak dapat di isi");
        }
        $this->content = $content;
        return $this;
    }

    public function setId(string $newId)
    {
        $this->id = $newId;
        return $this;
    }

    public function setClass(string|array|null $newClass = null)
    {
        if ($newClass) {
            if (is_string($newClass)) {
                $newClass = explode(" ", $newClass);
            }
            $this->class = $newClass;
        }
        $this->class = [];
        return $this;
    }

    public function addClass(string|array $newClass)
    {
        if (is_string($newClass)) {
            $newClass = explode(" ", $newClass);
        }
        $this->class = array_merge($this->class, $newClass);
        $this->class = array_unique($this->class);
        return $this;
    }

    public function removeClass(string|array $deletedClass)
    {
        if (is_string($deletedClass)) {
            $deletedClass = explode(" ", $deletedClass);
        }
        $this->class = array_diff($this->class, $deletedClass);
        $this->class = array_values($this->class);
        return $this;
    }

    public function getClass(): string
    {
        if ($this->class) {
            return implode(" ", $this->class);
        }
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

        return $this->isContainable ? sprintf("<%s>", $result) : sprintf("<%s />", $result);
    }

    public function getCloseTag(): string
    {
        return sprintf("</%s>", $this->element->value);
    }

    public function generate(string $content = null): string
    {
        if ($content) {
            $this->setContent($content);
        }
        if ($this->isContainable) {
            return vsprintf("%s%s%s", [
                $this->getOpenTag(),
                $this->getContent(),
                $this->getCloseTag()
            ]);
        }
        return sprintf("%s", $this->getOpenTag());
    }

    public function getDetail(): string
    {
        $isContainable = $this->isContainable ? "Dapat diisi" : "Tidak dapat diist";
        return sprintf(
            "Ini adalah elemen %s dengan tag <%s>, Elemen ini merupakan Elemen yang %s",
            $this->element->name,
            $this->element->value,
            $isContainable
        );
    }

    public function __toString()
    {
        return htmlspecialchars($this->getDetail());
    }
}
<?php

namespace MrFrost\HtmlObject;

class HtmlElement
{
    public function __construct(
        public $element,
        public string|null $id = null,
        public array $class = []
    ) {
        $this->isContainable = $element->isContainable();
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

    public function getDetail(): string
    {
        $isContainable = $this->isContainable ? "Dapat diisi" : "Tidak dapat diist";
        return sprintf(
            "Ini adalah elemen %s dengan tag <%s>, Elemen ini merupakan Elemen yang %s dan bertipe %s",
            $this->element->name,
            $this->element->value,
            $isContainable,
            $this->element->getType
        );
    }

    public function __toString()
    {
        return htmlspecialchars($this->getDetail());
    }
}
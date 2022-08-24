<?php

namespace MrFrost\HtmlObject\Utils;

/**
 * HTML Class Manipulators
 */
trait HtmlClass
{
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
}
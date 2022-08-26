<?php

namespace MrFrost\HtmlObject\Enums\Elements;

enum GlobalAttributes: string
{
    case accesskey = "Specifies a shortcut key to activate/focus an element";
    case contenteditable = "Specifies whether the content of an element is editable or not";
    case data = "Used to store custom data private to the page or application";
    case dir = "Specifies the text direction for the content in an element";
    case draggable = "Specifies whether an element is draggable or not";
    case hidden = "Specifies that an element is not yet, or is no longer, relevant";
    case id = "Specifies a unique id for an element";
    case lang = "Specifies the language of the element's content";
    case spellcheck = "Specifies whether the element is to have its spelling and grammar checked or not";
    case style = "Specifies an inline CSS style for an element";
    case tabindex = "Specifies the tabbing order of an element";
    case title = "Specifies extra information about an element";
    case translate = "Specifies whether the content of an element should be translated or not";

    public function getType(): bool
    {
        return match ($this) {
            self::contenteditable, self::draggable, self::hidden, self::spellcheck, self::translate => bool,
            default => string
        };
    }
}
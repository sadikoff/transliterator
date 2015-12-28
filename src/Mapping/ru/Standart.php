<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

class Standart implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return  array (
            'cyr' => array(
                'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
                'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш'
            ),
            'lat' => array(
                'šč', 'ʺ', 'y', 'ʹ', 'è', 'ju', 'ja',
                'Šč', 'ʺ', 'Y', 'ʹ', 'È', 'Ju', 'Ja',
                'a', 'b', 'v', 'g', 'd', 'e', 'ë', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'c', 'č', 'š',
                'A', 'B', 'V', 'G', 'D', 'E', 'Ë', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'X', 'C', 'Č', 'Š'
            )
        );
    }
}

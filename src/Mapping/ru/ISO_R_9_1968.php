<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

class ISO_R_9_1968 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return  array (
            'cyr' => array(
                'х', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
                'Х', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ц',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ц'
            ),
            'lat' => array(
                'ch', 'č', 'š', 'šč', 'ʺ', 'y', 'ʹ', 'ė', 'ju', 'ja',
                'Ch', 'Č', 'Š', 'Šč', 'ʺ', 'Y', 'ʹ', 'Ė', 'Ju', 'Ja',
                'a', 'b', 'v', 'g', 'd', 'e', 'ë', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'c',
                'A', 'B', 'V', 'G', 'D', 'E', 'Ë', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'C'
            )
        );
    }
}

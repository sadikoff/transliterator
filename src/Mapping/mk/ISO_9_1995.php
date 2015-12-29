<?php

namespace Artemiso\Transliterator\Mapping\mk;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class ISO_9_1995
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class ISO_9_1995 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'ј', 'љ', 'њ', 'џ',
                'Ј', 'Љ', 'Њ', 'Џ',
                'а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'ж', 'з', 'ѕ', 'и', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'ќ', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
                'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'Ж', 'З', 'Ѕ', 'И', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш'
            ],
            'lat' => [
                'ǰ', 'l̂', 'n̂', 'd̂',
                'J̌', 'L̂', 'N̂', 'D̂',
                'a', 'b', 'v', 'g', 'd', 'ǵ', 'e', 'ž', 'z', 'ẑ', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'ḱ', 'u', 'f', 'h', 'c', 'č', 'š',
                'A', 'B', 'V', 'G', 'D', 'Ǵ', 'E', 'Ž', 'Z', 'Ẑ', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'Ḱ', 'U', 'F', 'H', 'C', 'Č', 'Š'
            ]
        ];
    }
}

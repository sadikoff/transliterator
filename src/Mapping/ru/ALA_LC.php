<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class ALA_LC
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class ALA_LC implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'ж', 'х', 'ц', 'ч', 'ш', 'ъ', 'э', 'ю', 'я',
                'Щ', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ъ', 'Э', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь', 'ы',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь', 'Ы'
            ],
            'lat' => [
                'shch', 'zh', 'kh', 't͡s', 'ch', 'sh', 'ʺ‡', 'ė', 'i͡u', 'i͡a',
                'Shch', 'Zh', 'Kh', 'T͡s', 'Ch', 'Sh', 'ʺ‡', 'Ė', 'I͡u', 'I͡a',
                'a', 'b', 'v', 'g', 'd', 'e', 'ë', 'z', 'i', 'ĭ', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'y', 'ʹ',
                'A', 'B', 'V', 'G', 'D', 'E', 'Ë', 'Z', 'I', 'Ĭ', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',  'Y', 'ʹ'
            ]
        ];
    }
}

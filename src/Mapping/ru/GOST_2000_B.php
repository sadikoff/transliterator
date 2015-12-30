<?php

namespace Artemiso\Transliterator\Mapping\ru;

/**
 * Class GOST_2000_B
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class GOST_2000_B extends Standart
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'ё', 'ж', 'ц', 'ч', 'ш', 'э', 'ю', 'я', 'х', 'ъ', 'ь', 'ы',
                'Щ', 'Ё', 'Ж', 'Ц', 'Ч', 'Ш', 'Э', 'Ю', 'Я', 'Х', 'Ъ', 'Ь', 'Ы',
                'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
            ],
            'lat' => [
                'shh', 'yo', 'zh', 'cz', 'ch', 'sh', "e'", 'yu', 'ya', 'kh', 'ʺ', "ʹ", "y'",
                'Shh', 'Yo', 'Zh', 'Cz', 'Ch', 'Sh', "E'", 'Yu', 'Ya', 'Kh', 'ʺ', "ʹ", "Y'",
                'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
                'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
            ]
        ];
    }
}

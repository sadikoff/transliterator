<?php

namespace Artemiso\Transliterator\Mapping\be;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class Standart
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Standart implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'э', 'ю', 'я',
                'Э', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'ґ', 'д', 'дж', 'дз', 'е', 'ё', 'ж', 'з', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ў', 'ф', 'х', 'ц', 'ч', 'ш', 'ы', 'ь',
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Дж', 'Дз', 'Е', 'Ё', 'Ж', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Ы', 'Ь'
            ],
            'lat' => [
                'è', 'ju', 'ja',
                'È', 'Ju', 'Ja',
                'a', 'b', 'v', 'h', 'g', 'd', 'dž', 'dz', 'e', 'ë', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'ŭ', 'f', 'x', 'c', 'č', 'š', 'y', '′',
                'A', 'B', 'V', 'H', 'G', 'D', 'Dž', 'Dz', 'E', 'Ë', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'Ŭ', 'F', 'X', 'C', 'Č', 'Š', 'Y', '′'
            ]
        ];
    }
}

<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class GOST_1986
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class GOST_1986 extends Standart
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'є', 'щ', 'ю', 'я',
                'Є', 'Щ', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'ь',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Ь'
            ],
            'lat' => [
                'je', 'šč', 'ju', 'ja',
                'Je', 'Šč', 'Ju', 'Ja',
                'a', 'b', 'v', 'g', 'd', 'e', 'ž', 'z', 'i', 'i', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'č', 'š', "'",
                'A', 'B', 'V', 'G', 'D', 'E', 'Ž', 'Z', 'I', 'I', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Č', 'Š', "'"
            ]
        ];
    }
}

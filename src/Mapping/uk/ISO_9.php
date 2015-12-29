<?php

namespace Artemiso\Transliterator\Mapping\uk;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class ISO_9
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class ISO_9 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'є', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ь', 'ю', 'я',
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Є', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ь', 'Ю', 'Я'
            ],
            'lat' => [
                'a', 'b', 'v', 'g', 'g̀', 'd', 'e', 'ê', 'ž', 'z', 'i', 'ì', 'ï', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'č', 'š', 'ŝ', '′', 'û', 'â',
                'A', 'B', 'V', 'G', 'G̀', 'D', 'E', 'Ê', 'Ž', 'Z', 'I', 'Ì', 'Ï', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Č', 'Š', 'Ŝ', '′', 'Û', 'Â'
            ]
        ];
    }
}

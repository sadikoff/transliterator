<?php

namespace Artemiso\Transliterator\Mapping\be;

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
                'дж', 'дз',
                'Дж', 'Дз',
                'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'ё', 'ж', 'з', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ў', 'ф', 'х', 'ц', 'ч', 'ш', '’', 'ы', 'ь', 'э', 'ю', 'я',
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Ё', 'Ж', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', '’', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
            ],
            'lat' => [
                'dž', 'dz',
                'Dž', 'Dz',
                'a', 'b', 'v', 'g', 'g̀', 'd', 'e', 'ë', 'ž', 'z', 'ì', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'ǔ', 'f', 'h', 'c', 'č', 'š', '’', 'y', '′', 'è', 'û', 'â',
                'A', 'B', 'V', 'G', 'G̀', 'D', 'E', 'Ë', 'Ž', 'Z', 'Ì', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'Ǔ', 'F', 'H', 'C', 'Č', 'Š', '’', 'Y', '′', 'È', 'Û', 'Â'
            ]
        ];
    }
}

<?php

namespace Artemiso\Transliterator\Mapping\be;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class National_2000
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class National_2000 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'дж', 'дз', 'е', 'ё', 'х', 'ю', 'я',
                'Дж', 'Дз', 'Е', 'Ё', 'Х', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'ж', 'з', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ў', 'ф', 'ц', 'ч', 'ш', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Д', 'Ж', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Ц', 'Ч', 'Ш', 'Ы', 'Ь', 'Э'
            ],
            'lat' => [
                'dž', 'dz', 'ie', 'io', 'ch', 'iu', 'ia',
                'Dž', 'Dz', 'Ie', 'Io', 'Ch', 'Iu', 'Ia',
                'a', 'b', 'v', 'h', 'd', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'ú', 'f', 'c', 'č', 'š', 'y', '’', 'e',
                'A', 'B', 'V', 'H', 'D', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'Ú', 'F', 'C', 'Č', 'Š', 'Y', '’', 'E'
            ]
        ];
    }
}

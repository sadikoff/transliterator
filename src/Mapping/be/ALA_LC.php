<?php

namespace Artemiso\Transliterator\Mapping\be;

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
                'дж', 'дз', 'ё', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
                'Дж', 'Дз', 'Ё', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'з', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ў', 'ф', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Ы', 'Ь', 'Э',
            ],
            'lat' => [
                'dz͡h', 'dz', 'i͡o', 'z͡h', 'kh', 'ts', 'ch', 'sh', 'i͡u', 'i͡a',
                'Dz͡h', 'Dz', 'I͡o', 'Z͡h', 'Kh', 'Ts', 'Ch', 'Sh', 'I͡u', 'I͡a',
                'a', 'b', 'v', 'h', 'g', 'd', 'e', 'z', 'i', 'ĭ', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'ŭ', 'f', 'y', '′', 'ė',
                'A', 'B', 'V', 'H', 'G', 'D', 'E', 'Z', 'I', 'Ĭ', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'Ŭ', 'F', 'Y', '′', 'Ė',
            ]
        ];
    }
}

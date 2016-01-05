<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class Derzhstandart_1995
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Derzhstandart1995 extends Standard
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'г', 'є', 'ж', 'ї', 'х', 'ч', 'ш', 'ю', 'я',
                'Щ', 'Г', 'Є', 'Ж', 'Ї', 'Х', 'Ч', 'Ш', 'Ю', 'Я',
                'а', 'б', 'в', 'ґ', 'д', 'е', 'з', 'и', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ц', 'ь',
                'А', 'Б', 'В', 'Ґ', 'Д', 'Е', 'З', 'И', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ц', 'Ь'
            ],
            'lat' => [
                'shh', 'gh', 'je', 'zh', 'ji', 'kh', 'ch', 'sh', 'ju', 'ja',
                'Shh', 'Gh', 'Je', 'Zh', 'Ji', 'Kh', 'Ch', 'Sh', 'Ju', 'Ja',
                'a', 'b', 'v', 'g', 'd', 'e', 'z', 'y', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'c', 'j',
                'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'Y', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'C', 'J'
            ]
        ];
    }
}

<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class Passport_2010
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Passport2010 extends Standart
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
                'Щ', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'є', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь',
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Є', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь'
            ],
            'lat' => [
                'shch', 'kh', 'ts', 'ch', 'sh', 'iu', 'ia',
                'Shch', 'Kh', 'Ts', 'Ch', 'Sh', 'Iu', 'Ia',
                'a', 'b', 'v', 'h', 'g', 'd', 'e', 'i', 'z', 'z', 'y', 'i', 'i', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', '',
                'A', 'B', 'V', 'H', 'G', 'D', 'E', 'I', 'Z', 'Z', 'Y', 'I', 'I', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', ''
            ]
        ];
    }
}

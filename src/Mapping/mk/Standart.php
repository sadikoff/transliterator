<?php

namespace Artemiso\Transliterator\Mapping\mk;

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
                'ѓ', 'ж', 'ѕ', 'љ', 'њ', 'ќ', 'ч', 'џ', 'ш',
                'Ѓ', 'Ж', 'Ѕ', 'Љ', 'Њ', 'Ќ', 'Ч', 'Џ', 'Ш',
                'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'ј', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Ј', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц'
            ],
            'lat' => [
                'gj', 'zh', 'dz', 'lj', 'nj', 'kj', 'ch', 'dj', 'sh',
                'Gj', 'Zh', 'Dz', 'Lj', 'Nj', 'Kj', 'Ch', 'Dj', 'Sh',
                'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c',
                'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C'
            ]
        ];
    }
}

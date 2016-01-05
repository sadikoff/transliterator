<?php

namespace Artemiso\Transliterator\Mapping\mk;

/**
 * Class ISO_9_R_1968_NA
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class ISO9R1968NA extends Standard
{
    protected static $cyr = [
        'ѕ', 'љ', 'њ', 'џ',
        'Ѕ', 'Љ', 'Њ', 'Џ',
        'а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'ж', 'з', 'и', 'ј', 'к', 'л', 'м', 'н',  'о', 'п', 'р', 'с', 'т', 'ќ', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
        'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'Ж', 'З', 'И', 'Ј', 'К', 'Л', 'М', 'Н',  'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш'
    ];

    protected static $lat = [
        'dz', 'lj', 'nj', 'dž',
        'Dz', 'Lj', 'Nj', 'Dž',
        'a', 'b', 'v', 'g', 'd', 'ǵ', 'e', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'ḱ', 'u', 'f', 'h', 'c', 'č', 'š',
        'A', 'B', 'V', 'G', 'D', 'Ǵ', 'E', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'Ḱ', 'U', 'F', 'H', 'C', 'Č', 'Š'
    ];
}

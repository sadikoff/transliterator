<?php

namespace Artemiso\Transliterator\Mapping\mk;

/**
 * Class BGN_PCGN
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class BGNPCGN extends Standard
{
    protected static $cyr = [
        'ѕ', 'љ', 'њ', 'џ',
        'Ѕ', 'Љ', 'Њ', 'Џ',
        'а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'ж', 'з', 'и', 'ј', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'ќ', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
        'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'Ж', 'З', 'И', 'Ј', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш'
    ];

    protected static $lat = [
        'dz', 'lj', 'nj', 'dž',
        'Dz', 'Lj', 'Nj', 'Dž',
        'a', 'b', 'v', 'g', 'd', 'đ', 'e', 'ž', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'ć', 'u', 'f', 'h', 'c', 'č', 'š',
        'A', 'B', 'V', 'G', 'D', 'Đ', 'E', 'Ž', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'Ć', 'U', 'F', 'H', 'C', 'Č', 'Š'
    ];
}

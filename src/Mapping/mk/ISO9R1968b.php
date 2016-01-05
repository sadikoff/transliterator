<?php

namespace Artemiso\Transliterator\Mapping\mk;

/**
 * Class ISO_9_R_1968_b
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class ISO9R1968b extends Standard
{
    protected static $cyr = [
        'ж', 'ѕ', 'љ', 'њ', 'х', 'ц', 'ч', 'џ', 'ш',
        'Ж', 'Ѕ', 'Љ', 'Њ', 'Х', 'Ц', 'Ч', 'Џ', 'Ш',
        'а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'з', 'и', 'ј', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'ќ', 'у', 'ф',
        'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'З', 'И', 'Ј', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф'
    ];

    protected static $lat = [
        'zh', 'dz', 'lj', 'nj', 'kh', 'ts', 'ch', 'dž', 'sh',
        'Zh', 'Dz', 'Lj', 'Nj', 'Kh', 'Ts', 'Ch', 'Dž', 'Sh',
        'a', 'b', 'v', 'g', 'd', 'ǵ', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'ḱ', 'u', 'f',
        'A', 'B', 'V', 'G', 'D', 'Ǵ', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'Ḱ', 'U', 'F'
    ];
}

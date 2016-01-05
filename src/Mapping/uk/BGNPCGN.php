<?php

namespace Artemiso\Transliterator\Mapping\uk;

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
        'щ', 'є', 'ж', 'ї', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
        'Щ', 'Є', 'Ж', 'Ї', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'з', 'и', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь',
        'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'З', 'И', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь'
    ];

    protected static $lat = [
        'shch', 'ye', 'zh', 'yi', 'kh', 'ts', 'ch', 'sh', 'yu', 'ya',
        'Shch', 'Ye', 'Zh', 'YI', 'Kh', 'Ts', 'Ch', 'Sh', 'Yu', 'Ya',
        'a', 'b', 'v', 'h', 'g', 'd', 'e', 'z', 'y', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', '’',
        'A', 'B', 'V', 'H', 'G', 'D', 'E', 'Z', 'Y', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', '’'
    ];
}

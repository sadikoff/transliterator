<?php

namespace Artemiso\Transliterator\Mapping\uk;

use Artemiso\Transliterator\Mapping\Mapping;

/**
 * Class Standard
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Standard extends Mapping
{
    protected static $cyr = [
        'є', 'ї', 'щ', 'ю', 'я',
        'Є', 'Ї', 'Щ', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'ж', 'з', 'и', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'ь',
        'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Ж', 'З', 'И', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Ь'
    ];

    protected static $lat = [
        'je', 'ji', 'šč', 'ju', 'ja',
        'Je', 'Ji', 'Šč', 'Ju', 'Ja',
        'a', 'b', 'v', 'h', 'g', 'd', 'e', 'ž', 'z', 'y', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'c', 'č', 'š', '′',
        'A', 'B', 'V', 'H', 'G', 'D', 'E', 'Ž', 'Z', 'Y', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'X', 'C', 'Č', 'Š', '′'
    ];
}

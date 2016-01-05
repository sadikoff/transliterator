<?php

namespace Artemiso\Transliterator\Mapping\bg;

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
        'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'ф', 'ж', 'ч', 'ш', 'щ', 'ц', 'х', 'й', 'ю', 'я', 'ь', 'у', 'ъ', 'ѣ', 'ѫ',
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'Ф', 'Ж', 'Ч', 'Ш', 'Щ', 'Ц', 'Х', 'Й', 'Ю', 'Я', 'Ь', 'У', 'Ъ', 'Ѣ', 'Ѫ'
    ];

    protected static $lat = [
        'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'f', 'ž', 'č', 'š', 'ŝ', 'c', 'h', 'j', 'û', 'â', '′', 'u', '″', 'ě', 'ǎ',
        'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'F', 'Ž', 'Č', 'Š', 'Ŝ', 'C', 'H', 'J', 'Û', 'Â', '′', 'U', '″', 'Ě', 'Ǎ'
    ];
}

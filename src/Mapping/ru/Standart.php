<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\Mapping\Mapping;

/**
 * Class Standart
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class Standart extends Mapping
{
    protected static $cyr = [
        'е', 'ë', 'ж', 'х', 'ц', 'ч', 'ш', 'щ', 'ю', 'я',
        'Е', 'Ё', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'д', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ъ', 'ы', 'ь', 'э',
        'А', 'Б', 'В', 'Г', 'Д', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ъ', 'Ы', 'Ь', 'Э'
    ];

    protected static $lat = [
        'e', 'ё', 'ž', 'x', 'c', 'č', 'š', 'šč', 'ju', 'ja',
        'E', 'Ë', 'Ž', 'X', 'C', 'Č', 'Š', 'Šč', 'Ju', 'Ja',
        'a', 'b', 'v', 'g', 'd', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'ʺ', 'y', 'ʹ', 'è',
        'A', 'B', 'V', 'G', 'D', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'ʺ', 'Y', 'ʹ', 'È'
    ];

}

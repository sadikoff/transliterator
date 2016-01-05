<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class ALA_LC
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class ALALC extends Standard
{
    protected static $cyr = [
        'щ', 'є', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
        'Щ', 'Є', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'ґ', 'д', 'е', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь',
        'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь'
    ];

    protected static $lat = [
        'shch', 'i͡e', 'z͡h', 'kh', 't͡s', 'ch', 'sh', 'i͡u', 'i͡a',
        'Shch', 'I͡e', 'Z͡h', 'Kh', 'T͡s', 'Ch', 'Sh', 'I͡u', 'I͡a',
        'a', 'b', 'v', 'h', 'g', 'd', 'e', 'z', 'y', 'i', 'ï', 'ĭ', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', '′',
        'A', 'B', 'V', 'H', 'G', 'D', 'E', 'Z', 'Y', 'I', 'Ï', 'Ĭ', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', '′'
    ];
}

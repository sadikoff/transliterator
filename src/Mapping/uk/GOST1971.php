<?php

namespace Artemiso\Transliterator\Mapping\uk;

/**
 * Class GOST_1971
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class GOST1971 extends Standard
{
    protected static $cyr = [
        'щ', 'є', 'ж', 'ї', 'х', 'ч', 'ш', 'ю', 'я',
        'Щ', 'Є', 'Ж', 'Ї', 'Х', 'Ч', 'Ш', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ь', 'ц',
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ь', 'Ц'
    ];

    protected static $lat = [
        'shh', 'je', 'zh', 'ji', 'kh', 'ch', 'sh', 'ju', 'ja',
        'Shh', 'Je', 'Zh', 'Ji', 'Kh', 'Ch', 'Sh', 'Ju', 'Ja',
        'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', "'", 'c',
        'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', "'", 'C'
    ];
}

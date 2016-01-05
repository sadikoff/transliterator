<?php

namespace Artemiso\Transliterator\Mapping\be;

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
        'дж', 'дз', 'е', 'ё', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
        'Дж', 'Дз', 'Е', 'Ё', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
        'а', 'б', 'в', 'г', 'д', 'з', 'і', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ў', 'ф', 'ы', 'ь', 'э',
        'А', 'Б', 'В', 'Г', 'Д', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Ы', 'Ь', 'Э'
    ];

    protected static $lat = [
        'dzh', 'dz', 'ye', 'yo', 'zh', 'kh', 'ts', 'ch', 'sh', 'yu', 'ya',
        'Dzh', 'Dz', 'Ye', 'Yo', 'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Yu', 'Ya',
        'a', 'b', 'v', 'h', 'd', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'w', 'f', 'y', '–', 'e',
        'A', 'B', 'V', 'H', 'D', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'W', 'F', 'Y', '–', 'E'
    ];
}

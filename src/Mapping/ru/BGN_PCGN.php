<?php

namespace Artemiso\Transliterator\Mapping\ru;

/**
 * Class BGN_PCGN
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class BGN_PCGN extends Standart
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'щ', 'ж', 'х', 'ц', 'ч', 'ш', 'ю', 'я',
                'Щ', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ъ', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ъ', 'Ы', 'Ь', 'Э'
            ],
            'lat' => [
                'shch', 'zh', 'kh', 'ts', 'ch', 'sh', 'yu', 'ya',
                'Shch', 'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Yu', 'Ya',
                'a', 'b', 'v', 'g', 'd', 'ye', 'yë', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'ˮ', 'y', 'ʼ', 'e',
                'A', 'B', 'V', 'G', 'D', 'Ye', 'Yë', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'ˮ', 'Y', 'ʼ', 'E'
            ]
        ];
    }
}

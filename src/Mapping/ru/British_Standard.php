<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

/**
 * Class British_Standard
 *
 * @package Artemiso\Transliterator
 *
 * @author Садиков Владимир <sadikoff@gmail.com>
 */
class British_Standard implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return [
            'cyr' => [
                'ж', 'х', 'ц', 'ч', 'ш', 'щ', 'ю', 'я',
                'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ъ', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ъ', 'Ы', 'Ь', 'Э'
            ],
            'lat' => [
                'zh', 'kh', 'ts', 'ch', 'sh', 'shch', 'yu', 'ya',
                'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Shch', 'Yu', 'Ya',
                'a', 'b', 'v', 'g', 'd', 'e', 'ë', 'z', 'i', 'ĭ', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'ʺ', 'ȳ', 'ʹ', 'é',
                'A', 'B', 'V', 'G', 'D', 'E', 'Ë', 'Z', 'I', 'Ĭ', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'ʺ', 'Ȳ', 'ʹ', 'É'
            ]
        ];
    }
}

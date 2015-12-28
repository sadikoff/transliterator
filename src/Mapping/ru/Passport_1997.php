<?php

namespace Artemiso\Transliterator\Mapping\ru;

use Artemiso\Transliterator\TransliterateCharMap;

class Passport_1997 implements TransliterateCharMap
{
    public static function getCharMap()
    {
        return  array (
            'cyr' => array(
                'е', 'ё', 'ж', 'х', 'ц', 'ч', 'ш', 'щ', 'ю', 'я',
                'Е', 'Ё', 'Ж', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ю', 'Я',
                'а', 'б', 'в', 'г', 'д', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'ъ', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Д', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Ъ', 'Ы', 'Ь', 'Э'
            ),
            'lat' => array(
                'ye', 'ye', 'zh', 'kh', 'ts', 'ch', 'sh', 'shch', 'yu', 'ya',
                'Ye', 'Ye', 'Zh', 'Kh', 'Ts', 'Ch', 'Sh', 'Shch', 'Yu', 'Ya',
                'a', 'b', 'v', 'g', 'd', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'ʺ', 'y', '–', 'e',
                'A', 'B', 'V', 'G', 'D', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'ʺ', 'Y', '–', 'E'
            )
        );
    }
}

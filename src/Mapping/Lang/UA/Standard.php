<?php

namespace Koff\Transliterator\Mapping\Lang\UA;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class Standard implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Є' => 'Je',
            'І' => 'I',
            'Ї' => 'Ji',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'H',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Ž',
            'З' => 'Z',
            'И' => 'Y',
            'Й' => 'J',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'X',
            'Ц' => 'C',
            'Ч' => 'Č',
            'Ш' => 'Š',
            'Щ' => 'Šč',
            'Ь' => '′',
            'Ю' => 'Ju',
            'Я' => 'Ja',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'h',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'ž',
            'з' => 'z',
            'и' => 'y',
            'й' => 'j',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'x',
            'ц' => 'c',
            'ч' => 'č',
            'ш' => 'š',
            'щ' => 'šč',
            'ь' => '′',
            'ю' => 'ju',
            'я' => 'ja',
            'є' => 'je',
            'і' => 'i',
            'ї' => 'ji',
            'Ґ' => 'G',
            'ґ' => 'g',
        ];
    }
}

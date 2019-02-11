<?php

namespace Koff\Transliterator\Mapping\Lang\RU;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class GOST_2000_B implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ё' => 'Yo',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'I',
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
            'Х' => 'Kh',
            'Ц' => 'Cz',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shh',
            'Ъ' => 'ʺ',
            'Ы' => 'Y\'',
            'Ь' => 'ʹ',
            'Э' => 'E\'',
            'Ю' => 'Yu',
            'Я' => 'Ya',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
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
            'х' => 'kh',
            'ц' => 'cz',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shh',
            'ъ' => 'ʺ',
            'ы' => 'y\'',
            'ь' => 'ʹ',
            'э' => 'e\'',
            'ю' => 'yu',
            'я' => 'ya',
            'ё' => 'yo',
        ];
    }
}

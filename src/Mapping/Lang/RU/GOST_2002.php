<?php

namespace Koff\Transliterator\Mapping\Lang\RU;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class GOST_2002 implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ё' => 'Ë',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Ž',
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
            'Х' => 'H',
            'Ц' => 'C',
            'Ч' => 'Č',
            'Ш' => 'Š',
            'Щ' => 'Ŝ',
            'Ъ' => 'ʺ',
            'Ы' => 'Y',
            'Ь' => 'ʹ',
            'Э' => 'È',
            'Ю' => 'Û',
            'Я' => 'Â',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'ž',
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
            'х' => 'h',
            'ц' => 'c',
            'ч' => 'č',
            'ш' => 'š',
            'щ' => 'ŝ',
            'ъ' => 'ʺ',
            'ы' => 'y',
            'ь' => 'ʹ',
            'э' => 'è',
            'ю' => 'û',
            'я' => 'â',
            'ё' => 'ë',
        ];
    }
}

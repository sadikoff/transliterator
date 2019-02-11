<?php

namespace Koff\Transliterator\Mapping\Lang\MK;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class BGN_PCGN implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ѓ' => 'Đ',
            'Ѕ' => 'Dz',
            'Ј' => 'J',
            'Љ' => 'Lj',
            'Њ' => 'Nj',
            'Ќ' => 'Ć',
            'Џ' => 'Dž',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Ž',
            'З' => 'Z',
            'И' => 'I',
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
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'ž',
            'з' => 'z',
            'и' => 'i',
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
            'ѓ' => 'đ',
            'ѕ' => 'dz',
            'ј' => 'j',
            'љ' => 'lj',
            'њ' => 'nj',
            'ќ' => 'ć',
            'џ' => 'dž'
        ];
    }
}

<?php

namespace Koff\Transliterator\Mapping\Lang\MK;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class ISO_9_R_1968_B implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ѓ' => 'Ǵ',
            'Ѕ' => 'Dz',
            'Ј' => 'J',
            'Љ' => 'Lj',
            'Њ' => 'Nj',
            'Ќ' => 'Ḱ',
            'Џ' => 'Dž',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Zh',
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
            'Х' => 'Kh',
            'Ц' => 'Ts',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'zh',
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
            'х' => 'kh',
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'ѓ' => 'ǵ',
            'ѕ' => 'dz',
            'ј' => 'j',
            'љ' => 'lj',
            'њ' => 'nj',
            'ќ' => 'ḱ',
            'џ' => 'dž'
        ];
    }
}

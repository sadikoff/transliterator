<?php

namespace Koff\Transliterator\Mapping\Lang\RU;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class ALA_LC implements MappingInterface
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
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'Ĭ',
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
            'Ц' => 'T͡s',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shch',
            'Ъ' => 'ʺ‡',
            'Ы' => 'ʹ',
            'Ь' => 'Y',
            'Э' => 'Ė',
            'Ю' => 'I͡u',
            'Я' => 'I͡a',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'ĭ',
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
            'ц' => 't͡s',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shch',
            'ъ' => 'ʺ‡',
            'ы' => 'ʹ',
            'ь' => 'y',
            'э' => 'ė',
            'ю' => 'i͡u',
            'я' => 'i͡a',
            'ё' => 'ë'
        ];
    }
}

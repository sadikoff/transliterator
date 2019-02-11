<?php

namespace Koff\Transliterator\Mapping\Lang\UA;

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
            'Є' => 'I͡e',
            'І' => 'I',
            'Ї' => 'Ï',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'H',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Z͡h',
            'З' => 'Z',
            'И' => 'Y',
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
            'Ь' => '′',
            'Ю' => 'I͡u',
            'Я' => 'I͡a',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'h',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'z͡h',
            'з' => 'z',
            'и' => 'y',
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
            'ь' => '′',
            'ю' => 'i͡u',
            'я' => 'i͡a',
            'є' => 'i͡e',
            'і' => 'i',
            'ї' => 'ï',
            'Ґ' => 'G',
            'ґ' => 'g',
        ];
    }
}

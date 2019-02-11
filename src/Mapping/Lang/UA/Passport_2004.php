<?php

namespace Koff\Transliterator\Mapping\Lang\UA;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class Passport_2004 implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Є' => 'I',
            'І' => 'I',
            'Ї' => 'I',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'H',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Z',
            'З' => 'Z',
            'И' => 'Y',
            'Й' => 'I',
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
            'Щ' => 'Shch',
            'Ь' => '\'',
            'Ю' => 'Iu',
            'Я' => 'Ia',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'h',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'z',
            'з' => 'z',
            'и' => 'y',
            'й' => 'i',
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
            'щ' => 'shch',
            'ь' => '\'',
            'ю' => 'iu',
            'я' => 'ia',
            'є' => 'i',
            'і' => 'i',
            'ї' => 'i',
            'Ґ' => 'G',
            'ґ' => 'g',
        ];
    }
}

<?php

namespace Artemiso\Transliterator\Settings;

/**
 * Keeps language,transliteration system and base path settings.
 *
 * @package Artemiso\Transliterator
 *
 * @author Владимир Садиков <sadikoff@gmail.com>
 */
class Settings
{
    protected $selected;

    public function __construct($selected)
    {
        $this->selected = $this->checkValue($selected);
    }

    private function checkValue($value)
    {
        $reflection = new \ReflectionClass(get_class($this));
        $classShortName = $reflection->getShortName();

        if ($classShortName == 'Language') {
            if (2 !== strlen($value)) {
                throw new \InvalidArgumentException('Language identifier should be 2 characters long.');
            }
        }

        if (!in_array($value, $reflection->getConstants())) {
            if ($classShortName == 'Language') {
                throw new \InvalidArgumentException(sprintf(
                    'Language "%s" is not supported.',
                    $value
                ));
            } elseif ($classShortName == 'System') {
                throw new \InvalidArgumentException(sprintf(
                    'Transliteration system "%s" is not supported for selected language.',
                    $value
                ));
            }
        }

        return $value;
    }

    public function __toString()
    {
        return $this->selected;
    }
}

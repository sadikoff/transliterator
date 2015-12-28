<?php

namespace Artemiso\Transliterator;

/**
 * Transliterator is used to convert text from
 * cyrillic to latin and vice versa.
 *
 * @package Artemiso\Transliterator
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 * @author Владимир Садиков <sadikoff@gmail.com>
 *
 * @see http://en.wikipedia.org/wiki/Transliteration
 */
class Transliterator
{
    /**
     * Transliterator settings.
     *
     * @var Settings
     */
    protected $settings;

    /**
     * @var array $mapping mapping cyr lat data
     */
    protected $mapping;

    /**
     * Transliterator constructor.
     *
     * @param string $lang   ISO 639-1 language code
     * @param string $system transliteration system
     * @see http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     */
    public function __construct($lang, $system = Settings::SYSTEM_DEFAULT)
    {
        $this->settings = new Settings($lang, $system);
    }

    /**
     * Set language.
     *
     * @param  string         $lang ISO 639-1 language code
     * @return Transliterator fluent interface
     * @see http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     */
    public function setLang($lang)
    {
        $this->settings->setLang($lang);
        $this->clearCharMaps();

        return $this;
    }

    /**
     * Set transliteration system.
     *
     * @param  string         $system transliteration system
     * @return Transliterator fluent interface
     */
    public function setSystem($system)
    {
        $this->settings->setSystem($system);
        $this->clearCharMaps();

        return $this;
    }

    /**
     * Clear char maps.
     *
     * @return Transliterator fluent interface
     */
    public function clearCharMaps()
    {
        $this->mapping = null;

        return $this;
    }

    /**
     * Transliterates cyrillic text to latin.
     *
     * @param  string $text cyrillic text
     * @return string latin text
     */
    public function cyr2Lat($text)
    {
        return $this->transliterate($text, true);
    }

    /**
     * Transliterates latin text to cyrillic.
     *
     * @param  string $text latin text
     * @return string cyrillic text
     */
    public function lat2Cyr($text)
    {
        return $this->transliterate($text, false);
    }

    /**
     * Transliterates cyrillic text to latin and vice versa
     * depending on $direction parameter.
     *
     * @param  string $text      latin text
     * @param  bool   $direction if true transliterates cyrillic text to latin, if false latin to cyrillic
     * @return string transliterated text
     */
    public function transliterate($text, $direction)
    {
        $this->mapping = DataLoader::getTransliterationMap($this->settings->getMappingClass());

        if ($direction) {
            return str_replace($this->getCyrMap(), $this->getLatMap(), $text);
        } else {
            return str_replace($this->getLatMap(), $this->getCyrMap(), $text);
        }
    }

    /**
     * Get cyrillic char map.
     *
     * @return array cyrillic char map
     */
    public function getCyrMap()
    {
        return $this->mapping[Settings::ALPHABET_CYR];
    }

    /**
     * Get latin char map.
     *
     * @return array latin char map
     */
    public function getLatMap()
    {
        return $this->mapping[Settings::ALPHABET_LAT];
    }
}

<?php

namespace Artemiso\Transliterator;

use Artemiso\Transliterator\Mapping\Mapping;
use Artemiso\Transliterator\Settings;
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
     * @var string
     */
    protected $lang;

    /**
     * @var string
     */
    protected $system;

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
    public function __construct($lang, $system = Settings\System::SCHOLARLY)
    {
        $this->lang = new Settings\Language($lang);
        $this->system = new Settings\System($system);
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
        if ($lang != $this->lang) {
            $this->lang = new Settings\Language($lang);
            $this->clearCharMaps();
        }

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
        if ($system != $this->system) {
            $this->system = new Settings\System($system);
            $this->clearCharMaps();
        }

        return $this;
    }

    /**
     * Clear char maps.
     *
     * @return Transliterator fluent interface
     */
    private function clearCharMaps()
    {
        $this->mapping = null;

        return $this;
    }

    /**
     * Sets Custom or Selected mapping
     *
     * @param array $mapping
     * @return $this
     */
    public function setMapping($mapping = null)
    {
        if (null === $mapping) {
            $this->mapping = DataLoader::getTransliterationMap(Mapping::getClassName($this->lang, $this->system));
        } else {
            $this->mapping = $mapping;
        }

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
    private function transliterate($text, $direction)
    {
        if (null === $this->mapping) {
            $this->setMapping();
        }

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
    private function getCyrMap()
    {
        return $this->mapping[Settings\Alphabet::CYR];
    }

    /**
     * Get latin char map.
     *
     * @return array latin char map
     */
    private function getLatMap()
    {
        return $this->mapping[Settings\Alphabet::LAT];
    }
}

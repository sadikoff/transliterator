<?php

namespace Koff\Transliterator;

use Koff\Transliterator\Mapping\MappingLoader;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 */
final class Transliterator
{
    private $mappingLoader;
    private $mappingClassname;

    public function __construct(string $mappingClassname = null)
    {
        $this->mappingLoader = new MappingLoader();
        $this->mappingClassname  = $mappingClassname;
    }

    public function useMapping(string $mappingClassname): void
    {
        $this->mappingClassname = $mappingClassname;
    }

    public function toTranslit(string $phrase, string $overrideMapping = null): string
    {
        $charMap = $this->mappingLoader->load($overrideMapping ?: $this->mappingClassname);

        return strtr($phrase, $charMap->getCharMapping());
    }

    /**
     * Bridge function for Gedmo Sluggable Listener
     *
     * @param string $slug      Text to transliterate
     * @param string $separator currently is not used
     * @param object $object    Entity object currently is not used
     *
     * @return string
     */
    public function transliterate($slug, $separator, $object)
    {
        return $this->toTranslit($slug);
    }
}

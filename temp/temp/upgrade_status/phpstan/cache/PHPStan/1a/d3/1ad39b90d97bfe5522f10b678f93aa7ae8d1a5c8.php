<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Transliteration/TransliterationInterface.php-1594234425',
   'data' => 
  array (
    '00c827d92d9db1a6239237013b0e0460' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for classes providing transliteration.
 *
 * @ingroup transliteration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '601dd85c789fa9b1d12d9a73f781a31d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes diacritics (accents) from certain letters.
   *
   * This only applies to certain letters: Accented Latin characters like
   * a-with-acute-accent, in the UTF-8 character range of 0xE0 to 0xE6 and
   * 01CD to 024F. Replacements that would result in the string changing length
   * are excluded, as well as characters that are not accented US-ASCII letters.
   *
   * @param string $string
   *   The string holding diacritics.
   *
   * @return string
   *   $string with accented letters replaced by their unaccented equivalents.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
         'functionName' => 'removeDiacritics',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c629a10d7e53bbe499abfbce21e0044' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Transliterates text from Unicode to US-ASCII.
   *
   * @param string $string
   *   The string to transliterate.
   * @param string $langcode
   *   (optional) The language code of the language the string is in. Defaults
   *   to \'en\' if not provided. Warning: this can be unfiltered user input.
   * @param string $unknown_character
   *   (optional) The character to substitute for characters in $string without
   *   transliterated equivalents. Defaults to \'?\'.
   * @param int $max_length
   *   (optional) If provided, return at most this many characters, ensuring
   *   that the transliteration does not split in the middle of an input
   *   character\'s transliteration.
   *
   * @return string
   *   $string with non-US-ASCII characters transliterated to US-ASCII
   *   characters, and unknown characters replaced with $unknown_character.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
         'functionName' => 'transliterate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Transliteration/PhpTransliteration.php-1594234425',
   'data' => 
  array (
    '53670faea4c25b8cd574e971e762bc95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements transliteration without using the PECL extensions.
 *
 * Transliterations are done character-by-character, by looking up non-US-ASCII
 * characters in a transliteration database.
 *
 * The database comes from two types of files, both of which are searched for in
 * the PhpTransliteration::$dataDirectory directory. First, language-specific
 * overrides are searched (see PhpTransliteration::readLanguageOverrides()). If
 * there is no language-specific override for a character, the generic
 * transliteration character tables are searched (see
 * PhpTransliteration::readGenericData()). If looking up the character in the
 * generic table results in a NULL value, or an illegal character is
 * encountered, then a substitute character is returned.
 *
 * Some parts of this code were derived from the MediaWiki project\'s UtfNormal
 * class, Copyright © 2004 Brion Vibber <brion@pobox.com>,
 * http://www.mediawiki.org/
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfe436a83f880d8ce848421a74cecc51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Directory where data for transliteration resides.
   *
   * The constructor sets this (by default) to subdirectory \'data\' underneath
   * the directory where the class\'s PHP file resides.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67e904d610c04a0d5a283fa371549080' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Associative array of language-specific character transliteration tables.
   *
   * The outermost array keys are language codes. For each language code key,
   * the value is an array whose keys are Unicode character codes, and whose
   * values are the transliterations of those characters to US-ASCII. This is
   * set up as needed in PhpTransliteration::replace() by calling
   * PhpTransliteration::readLanguageOverrides().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd29ad5c4b8b4fdf1a39414467ad26b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Non-language-specific transliteration tables.
   *
   * Array whose keys are the upper two bytes of the Unicode character, and
   * whose values are an array of transliterations for each lower-two bytes
   * character code. This is set up as needed in PhpTransliteration::replace()
   * by calling PhpTransliteration::readGenericData().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea627eddb4b12a1bc36e209141006e0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a transliteration object.
   *
   * @param string $data_directory
   *   (optional) The directory where data files reside. If omitted, defaults
   *   to subdirectory \'data\' underneath the directory where the class\'s PHP
   *   file resides.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f59f16084fb87f643873cd8f5e5b474b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'removeDiacritics',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '011eaffb66b0aaac89730f6731004370' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'transliterate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b143ade1fa9d1e9dd1d8ac8f8859e95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the character code for a UTF-8 character: like ord() but for UTF-8.
   *
   * @param string $character
   *   A single UTF-8 character.
   *
   * @return int
   *   The character code, or -1 if an illegal character is found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'ordUTF8',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '036b51ff7245302745620fe7e61296f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces a single Unicode character using the transliteration database.
   *
   * @param int $code
   *   The character code of a Unicode character.
   * @param string $langcode
   *   The language code of the language the character is in.
   * @param string $unknown_character
   *   The character to substitute for characters without transliterated
   *   equivalents.
   *
   * @return string
   *   US-ASCII replacement character. If it has a mapping, it is returned;
   *   otherwise, $unknown_character is returned. The replacement can contain
   *   multiple characters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'replace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8165f595f046ad9f2ad9598b55854b6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Look up the generic replacement for a UTF-8 character code.
   *
   * @param $code
   *   The UTF-8 character code.
   * @param string $unknown_character
   *   (optional) The character to substitute for characters without entries in
   *   the replacement tables.
   *
   * @return string
   *   US-ASCII replacement characters. If it has a mapping, it is returned;
   *   otherwise, $unknown_character is returned. The replacement can contain
   *   multiple characters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'lookupReplacement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0044add153e10c8d0aa206df4cbcb467' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reads in language overrides for a language code.
   *
   * The data is read from files named "$langcode.php" in
   * PhpTransliteration::$dataDirectory. These files should set up an array
   * variable $overrides with an element whose key is $langcode and whose value
   * is an array whose keys are character codes, and whose values are their
   * transliterations in this language. The character codes can be for any valid
   * Unicode character, independent of the number of bytes.
   *
   * @param $langcode
   *   Code for the language to read.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'readLanguageOverrides',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00bcab6ae8b4ff759e3a7579b17d9ea9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reads in generic transliteration data for a bank of characters.
   *
   * The data is read in from a file named "x$bank.php" (with $bank in
   * hexadecimal notation) in PhpTransliteration::$dataDirectory. These files
   * should set up a variable $bank containing an array whose numerical indices
   * are the remaining two bytes of the character code, and whose values are the
   * transliterations of these characters into US-ASCII. Note that the maximum
   * Unicode character that can be encoded in this way is 4 bytes.
   *
   * @param $bank
   *   First two bytes of the Unicode character, or 0 for the ASCII range.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Transliteration',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
         'functionName' => 'readGenericData',
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
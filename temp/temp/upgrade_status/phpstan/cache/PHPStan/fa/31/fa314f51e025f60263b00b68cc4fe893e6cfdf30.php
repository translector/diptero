<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformTranslationManagerInterface.php-1594690523',
   'data' => 
  array (
    'f23a6923d9f3eae3ad997b4b9c2e2a36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for webform element translation classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f27720035a6144270099c8432a31ba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the translated webform should be displayed.
   *
   * @return bool
   *   TRUE if the translated webform should be displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => 'isAdminRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6eb17748ca88376cab83582e2c6804c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform elements for specific language.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $langcode
   *   The language code for the webform elements.
   * @param bool $reset
   *   (optional) Whether to reset the translated config cache. Defaults to
   *   FALSE.
   *
   * @return array
   *   A webform\'s translated elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => 'getElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b18cef1340e625369125dbd444b34d1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get base webform elements for the site\'s default language.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   Base webform elements as a flattened associative array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => 'getBaseElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c87b95a963c05581bd7aeaec41019713' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get flattened associative array of translated element properties.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   A associative array of translated element properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => 'getSourceElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4bdb725707fc63acd30b404565f8864' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get flattened associative array of translated element properties.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $langcode
   *   The language code for the translated element properties.
   *
   * @return array
   *   A associative array of translated element properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => 'getTranslationElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '016e65856a653ac57d095e7d3dbfed90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the original langcode for a webform.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return string
   *   The original langcode for a webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformTranslationManagerInterface',
         'functionName' => 'getOriginalLangcode',
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
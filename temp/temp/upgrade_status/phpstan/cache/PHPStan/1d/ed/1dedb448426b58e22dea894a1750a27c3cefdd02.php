<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Transliteration/PhpTransliteration.php-1594234425',
   'data' => 
  array (
    'a6db6373d426e766f4d52ff246dd2258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Enhances PhpTransliteration with an alter hook.
 *
 * @ingroup transliteration
 * @see hook_transliteration_overrides_alter()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Transliteration',
         'uses' => 
        array (
          'basetransliteration' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\Core\\Transliteration\\PhpTransliteration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69ee5390e1066c25880e17270d5636d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler to execute the transliteration_overrides alter hook.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Transliteration',
         'uses' => 
        array (
          'basetransliteration' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\Core\\Transliteration\\PhpTransliteration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15646501fa97617b90a8d1d6b6dd41ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a PhpTransliteration object.
   *
   * @param string $data_directory
   *   The directory where data files reside. If NULL, defaults to subdirectory
   *   \'data\' underneath the directory where the class\'s PHP file resides.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to execute the transliteration_overrides alter hook.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Transliteration',
         'uses' => 
        array (
          'basetransliteration' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\Core\\Transliteration\\PhpTransliteration',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '841649001efd76cf4ce70a084e982c10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Component\\Transliteration\\PhpTransliteration::readLanguageOverrides().
   *
   * Allows modules to alter the language-specific $overrides array by invoking
   * hook_transliteration_overrides_alter().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Transliteration',
         'uses' => 
        array (
          'basetransliteration' => 'Drupal\\Component\\Transliteration\\PhpTransliteration',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\Core\\Transliteration\\PhpTransliteration',
         'functionName' => 'readLanguageOverrides',
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
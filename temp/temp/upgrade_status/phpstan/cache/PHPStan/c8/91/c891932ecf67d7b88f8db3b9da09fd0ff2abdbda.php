<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/src/ProviderManagerInterface.php-1587685827',
   'data' => 
  array (
    '197a482bdbb6214af09a129206a07602' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for the class that gathers the provider plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23f34f781fe54be309f888bdd5cc988c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an options list suitable for form elements for provider selection.
   *
   * @return array
   *   An array of options keyed by plugin ID with label values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
         'functionName' => 'getProvidersOptionList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed7f098d11c7fac95b6e763b8c03f089' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Load the provider plugin definitions from a FAPI options list value.
   *
   * @param array $options
   *   An array of options from a form API submission.
   *
   * @return array
   *   An array of plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
         'functionName' => 'loadDefinitionsFromOptionList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd68d2a6196429fa1bceced094a9b5b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the provider applicable to the given user input.
   *
   * @param array $definitions
   *   A list of definitions to test against.
   * @param string $user_input
   *   The user input to test against the plugins.
   *
   * @return \\Drupal\\video_embed_field\\ProviderPluginInterface|bool
   *   The relevant plugin or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
         'functionName' => 'filterApplicableDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85beb39e4aafa6abda188bfe43e7c370' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Load a provider from user input.
   *
   * @param string $input
   *   Input provided from a field.
   *
   * @return \\Drupal\\video_embed_field\\ProviderPluginInterface|bool
   *   The loaded plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
         'functionName' => 'loadProviderFromInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f9f318ccb1d40a3d177a27f6c0c6fcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Load a plugin definition from an input.
   *
   * @param string $input
   *   An input string.
   *
   * @return array
   *   A plugin definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
         'functionName' => 'loadDefinitionFromInput',
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
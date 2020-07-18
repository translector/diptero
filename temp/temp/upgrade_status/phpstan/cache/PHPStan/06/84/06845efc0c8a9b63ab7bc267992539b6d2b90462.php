<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/MatcherInterface.php-1586214306',
   'data' => 
  array (
    '57d6f33e4a62b2cab8bc40211e3aeb8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for matchers.
 *
 * @see \\Drupal\\linkit\\Annotation\\Matcher
 * @see \\Drupal\\linkit\\MatcherBase
 * @see \\Drupal\\linkit\\MatcherManager
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67ec7b2bf1b1625097452a0bdb9e5861' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the unique ID representing the matcher.
   *
   * @return string
   *   The matcher ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => 'getUuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3a891e162afb314fd5cf78430901edd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the matcher label.
   *
   * @return string
   *   The matcher label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => 'getLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '208b80709c99fc0cca6bd9fdefb7675a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the summarized configuration of the matcher.
   *
   * @return array
   *   An array of summarized configuration of the matcher.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03a995551a065e917090d48a2472c106' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the weight of the matcher.
   *
   * @return int|string
   *   Either the integer weight of the matcher, or an empty string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ecd5aa2f156a86080314e5d87740180' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the weight for the matcher.
   *
   * @param int $weight
   *   The weight for this matcher.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => 'setWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f7486fa16a9cecc3bbff7f29bed0ad4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes the matcher.
   *
   * @param string $string
   *   The string that contains the text to search for.
   *
   * @return \\Drupal\\linkit\\Suggestion\\SuggestionCollection
   *   A suggestion collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\linkit\\MatcherInterface',
         'functionName' => 'execute',
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
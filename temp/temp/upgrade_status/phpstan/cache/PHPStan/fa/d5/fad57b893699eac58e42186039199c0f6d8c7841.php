<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/filter/src/FilterFormatInterface.php-1594234425',
   'data' => 
  array (
    '0bf8882be7c2f90d58787a89071fcbd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a filter format entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a0d18095aced7d0822f986a166b9cd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the ordered collection of filter plugin instances or an individual plugin instance.
   *
   * @param string $instance_id
   *   (optional) The ID of a filter plugin instance to return.
   *
   * @return \\Drupal\\filter\\FilterPluginCollection|\\Drupal\\filter\\Plugin\\FilterInterface
   *   Either the filter collection or a specific filter plugin instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'filters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7429acf5ad9b4e9e18cb7b3567f8e40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the configuration for a filter plugin instance.
   *
   * Sets or replaces the configuration of a filter plugin in $this->filters,
   * and if instantiated already, also ensures that the actual filter plugin on
   * the FilterPluginCollection contains the identical configuration.
   *
   * @param string $instance_id
   *   The ID of a filter plugin to set the configuration for.
   * @param array $configuration
   *   The filter plugin configuration to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'setFilterConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b7fb305dbcbba9aaf7e13f7b0263937' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns if this format is the fallback format.
   *
   * The fallback format can never be disabled. It must always be available.
   *
   * @return bool
   *   TRUE if this format is the fallback format, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'isFallbackFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68200a534afe33f6dfea6f13ada00284' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the machine-readable permission name for the text format.
   *
   * @return string|bool
   *   The machine-readable permission name, or FALSE if the text format is
   *   malformed or is the fallback format (which is available to all users).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'getPermissionName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15a892a333f0be05cc8f6b720465ba3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves all filter types that are used in the text format.
   *
   * @return array
   *   All filter types used by filters of the text format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'getFilterTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26b825a33621ab115242f0919bb61489' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve all HTML restrictions (tags and attributes) for the text format.
   *
   * Note that restrictions applied to the "*" tag (the wildcard tag, i.e. all
   * tags) are treated just like any other HTML tag. That means that any
   * restrictions applied to it are not automatically applied to all other tags.
   * It is up to the caller to handle this in whatever way it sees fit; this way
   * no information granularity is lost.
   *
   * @return array|false
   *   A structured array as returned by FilterInterface::getHTMLRestrictions(),
   *   but with the intersection of all filters in this text format.
   *   Will either indicate blacklisting of tags or whitelisting of tags. In
   *   the latter case, it\'s possible that restrictions on attributes are also
   *   stored. FALSE means there are no HTML restrictions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'getHtmlRestrictions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23edb3c572a03a400091c698158b092a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a filter.
   *
   * @param string $instance_id
   *   The ID of a filter plugin to be removed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\filter\\FilterFormatInterface',
         'functionName' => 'removeFilter',
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
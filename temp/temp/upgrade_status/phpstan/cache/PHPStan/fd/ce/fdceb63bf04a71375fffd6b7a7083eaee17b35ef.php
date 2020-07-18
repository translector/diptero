<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/ProfileInterface.php-1586214306',
   'data' => 
  array (
    '0d3b21375da7fce22019a4c20e1b7b41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a profile entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb244ddd0a44a9e21a76d9278c4b6ff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the profile description.
   *
   * @return string
   *   The profile description.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26743f49b294a7900811153287b921c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the profile description.
   *
   * @param string $description
   *   The profile description.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'setDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed10174369e4b618793042dd0c7b870f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a specific matcher.
   *
   * @param string $instance_id
   *   The matcher instance ID.
   *
   * @return \\Drupal\\linkit\\MatcherInterface
   *   The matcher object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'getMatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1bf1eb4fdcbad6bc3847c15f17411d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the matchers for this profile.
   *
   * @return \\Drupal\\linkit\\MatcherCollection|\\Drupal\\linkit\\MatcherInterface[]
   *   The matcher collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'getMatchers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f14e619550f07fe92769aa1523b295ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a matcher to this profile.
   *
   * @param array $configuration
   *   An array of matcher configuration.
   *
   * @return string
   *   The instance ID of the matcher.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'addMatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f147ee305ec5520cf1810fa95bc46159' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a matcher from this profile.
   *
   * @param \\Drupal\\linkit\\MatcherInterface $matcher
   *   The matcher object.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'removeMatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05dfd1406d3a3b3465726001542a36b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the configuration for a matcher instance.
   *
   * @param string $instance_id
   *   The instance ID of the matcher to set the configuration for.
   * @param array $configuration
   *   The matcher configuration to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\linkit\\ProfileInterface',
         'functionName' => 'setMatcherConfig',
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
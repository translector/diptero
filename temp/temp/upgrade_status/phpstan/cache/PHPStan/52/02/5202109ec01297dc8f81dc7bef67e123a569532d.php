<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformRequestInterface.php-1594241402',
   'data' => 
  array (
    '4267935211354048bd2c2d5ab7d964ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a webform request handler.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56a8b72690afebcd4a9dad275fc74a08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the current request is a webform admin route.
   *
   * @return bool
   *   TRUE if the current request is a webform admin route.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'isWebformAdminRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53d09116aaf7aa3c11c09d3fb460b54b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current request\'s source entity.
   *
   * @param string|array $ignored_types
   *   (optional) Array of ignore entity types.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|null
   *   The current request\'s source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getCurrentSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad4f84a5bf8d37501701d90d2b9a526b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform associated with the current request.
   *
   * @return \\Drupal\\webform\\WebformInterface|null
   *   The current request\'s webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getCurrentWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ebaaf52a5b8e09c1770703fdcba9017' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform submission associated with the current request.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface|null
   *   The current request\'s webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getCurrentWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3d9ca78dd51fc7f0750f9b9adc31010' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL for the current webform and source entity.
   *
   * @param string $route_name
   *   The route name.
   * @param array $route_options
   *   The route options.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL for a form/submission and source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getCurrentWebformUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf12347634db22d14f27d9781da782b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL for the current webform submission and source entity.
   *
   * @param string $route_name
   *   The route name.
   * @param array $route_options
   *   The route options.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL for a form/submission and source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getCurrentWebformSubmissionUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '414f47131a4ba8cc7c393f74a4ffc244' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform and source entity for the current request.
   *
   * @return array
   *   An array containing the webform and source entity for the current
   *   request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getWebformEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '169f2a1575ceb4cbdaedc02a7c295681' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform submission and source entity for the current request.
   *
   * @return array
   *   An array containing the webform and source entity for the current
   *   request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getWebformSubmissionEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '931085523b710eb9ea96de7285b49144' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the current request is an Ajax request.
   *
   * @return bool
   *   TRUE if the current request is an Ajax request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6ac0bee8ea6e5c07256e019198d265b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL for a form/submission and source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $webform_entity
   *   A webform or webform submission.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform submission\'s source entity.
   * @param string $route_name
   *   The route name.
   * @param array $route_options
   *   The route options.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL for a form/submission and source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c0d608d778287b464a217c7a998d56c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the route name for a form/submission and source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $webform_entity
   *   A webform or webform submission.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform submission\'s source entity.
   * @param string $route_name
   *   The route name.
   *
   * @return string
   *   A route name prefixed with \'entity.{entity_type_id}\'
   *   or just \'entity\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getRouteName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02baa9d05004db3822d06b0eac65a687' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the route parameters for a form/submission and source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $webform_entity
   *   A webform or webform submission.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform submission\'s source entity.
   *
   * @return array
   *   An array of route parameters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getRouteParameters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d2ddef7278ada8b4150c44fe688560a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the base route name for a form/submission and source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $webform_entity
   *   A webform or webform submission.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform submission\'s source entity.
   *
   * @return string
   *   If the source entity has a webform attached, \'entity.{entity_type_id}\'
   *   or just \'entity\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'getBaseRouteName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a88bc4d42c45c82fa8b0add84ffc7fb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if a source entity has dedicate webform routes.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform submission\'s source entity.
   *
   * @return bool
   *   TRUE if a source entity has dedicate webform routes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'hasSourceEntityWebformRoutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5d2c03a736ac12e1714d433fd691c65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if a source entity is attached to a webform.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $webform_entity
   *   A webform or webform submission.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform submission\'s source entity.
   *
   * @return bool
   *   TRUE if a webform is attached to a webform submission source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformRequestInterface',
         'functionName' => 'isValidSourceEntity',
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
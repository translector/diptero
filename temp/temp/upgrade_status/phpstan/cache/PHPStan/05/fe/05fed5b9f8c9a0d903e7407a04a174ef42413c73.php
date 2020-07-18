<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/ParamConverter/ParamConverterInterface.php-1594234425',
   'data' => 
  array (
    '8d1500a7dd32ef032a753de763b1ddfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for parameter converters.
 *
 * Classes implementing this interface are responsible for converting a path
 * parameter to the object it represents.
 *
 * Here is an example path: /admin/structure/block/manage/{block}
 *
 * In this case, \'{block}\' would be the path parameter which should be turned
 * into a block object representing the block in question.
 *
 * ParamConverters are defined as services tagged with \'paramconverter\', and are
 * managed by the \'paramconverter_manager\' service.
 *
 * @see menu
 * @see \\Drupal\\Core\\ParamConverter\\ParamConverterManagerInterface
 * @see \\Drupal\\Core\\ParamConverter\\EntityConverter
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\ParamConverter',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\ParamConverter\\ParamConverterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7016a8c59b4044b56973f7e1f6d9f7cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts path variables to their corresponding objects.
   *
   * @param mixed $value
   *   The raw value.
   * @param mixed $definition
   *   The parameter definition provided in the route options.
   * @param string $name
   *   The name of the parameter.
   * @param array $defaults
   *   The route defaults array.
   *
   * @return mixed|null
   *   The converted parameter value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\ParamConverter',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\ParamConverter\\ParamConverterInterface',
         'functionName' => 'convert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc6c9c1659214b2620ffa82c2179d287' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the converter applies to a specific route and variable.
   *
   * @param mixed $definition
   *   The parameter definition provided in the route options.
   * @param string $name
   *   The name of the parameter.
   * @param \\Symfony\\Component\\Routing\\Route $route
   *   The route to consider attaching to.
   *
   * @return bool
   *   TRUE if the converter applies to the passed route and parameter, FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\ParamConverter',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\ParamConverter\\ParamConverterInterface',
         'functionName' => 'applies',
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
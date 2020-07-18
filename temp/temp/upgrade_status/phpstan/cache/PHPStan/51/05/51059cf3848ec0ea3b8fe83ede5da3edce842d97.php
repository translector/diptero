<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformLogicHelper.php-1594690523',
   'data' => 
  array (
    '4eac1a0917f882c3eb7bd84142ef3d7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper to handle logic related issues.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd59a2b8d8139bdca1e2b71e43141cc70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track recursions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55b6b52300025ad3994ce34b6d7115c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track recursions by counting how many times a value is called.
   *
   * @param string $value
   *   A string value typically a token.
   * @param bool $increment
   *   TRUE to increment tracking and FALSE to deincrement tracking.
   *
   * @return bool
   *   FALSE when recursion is detected.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
         'functionName' => 'trackRecursion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd545c29df675803c1740d03804a1717' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Start recursion tracking.
   *
   * @param string $value
   *   A string value typically a token.
   *
   * @return bool
   *   FALSE when recursion is detected.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
         'functionName' => 'startRecursionTracking',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ba53cdd50e4e5e30687095d6c0278fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stop recursion tracking.
   *
   * @param string $value
   *   A string value typically a token.
   *
   * @return bool
   *   FALSE when recursion is detected.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformLogicHelper',
         'functionName' => 'stopRecursionTracking',
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
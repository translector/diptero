<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformSubmissionGenerateInterface.php-1594690523',
   'data' => 
  array (
    '313c1fc7490d7b80693557fb133163c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for webform submission generation.
 *
 * @see \\Drupal\\webform\\WebformSubmissionGenerate
 * @see \\Drupal\\webform\\Plugin\\DevelGenerate\\WebformSubmissionDevelGenerate
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionGenerateInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4fdde8a8d6522716853ec55d1b2c4a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generate webform submission data.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   The webform this submission will be added to.
   *
   * @return array
   *   An associative array containing webform submission data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionGenerateInterface',
         'functionName' => 'getData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e8561dd93d005430b52a45fc27672df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get test value for a webform element.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $name
   *   The name of the element.
   * @param array $element
   *   The FAPI element.
   * @param array $options
   *   Options used to generate a test value.
   *
   * @return array|int|null
   *   An array containing multiple values or a single value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionGenerateInterface',
         'functionName' => 'getTestValue',
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
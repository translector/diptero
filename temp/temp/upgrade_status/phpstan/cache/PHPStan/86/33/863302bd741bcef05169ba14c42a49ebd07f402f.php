<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformSubmissionViewBuilderInterface.php-1594241402',
   'data' => 
  array (
    '90fb1af700e4f7f8c73cfdd7d7d14a07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for webform view builder classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityviewbuilderinterface' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionViewBuilderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e36683f01f73670034dbb99a35f17cfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build element display items from elements and submitted data.
   *
   * @param array $elements
   *   Webform elements.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   - excluded_elements: An array of elements to be excluded.
   *   - ignore_access: Flag to ignore private and/or access controls and always
   *     display the element.
   *   - email: Format element to be send via email.
   * @param string $format
   *   Output format set to html or text.
   *
   * @return array
   *   A render array displaying the submitted values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityviewbuilderinterface' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionViewBuilderInterface',
         'functionName' => 'buildElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6be46ccd4c31add3a31f4e8bacac5df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build table display from elements and submitted data.
   *
   * @param array $elements
   *   A flattened array webform elements that have values.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   - excluded_elements: An array of elements to be excluded.
   *   - email: Format element to be send via email.
   *
   * @return array
   *   A render array displaying the submitted values in a table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityviewbuilderinterface' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionViewBuilderInterface',
         'functionName' => 'buildTable',
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
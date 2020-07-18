<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_cards/src/WebformCardsManagerInterface.php-1594690523',
   'data' => 
  array (
    '5a8973a9b4cc40383b7459c87fa1e367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for webform cards manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_cards',
         'uses' => 
        array (
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_cards\\WebformCardsManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29032a1f26c8b9c936ea024872f083e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if a webform has cards.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return bool
   *   TRUE if a webform has cards.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_cards',
         'uses' => 
        array (
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_cards\\WebformCardsManagerInterface',
         'functionName' => 'hasCards',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9162275d71b56254dcfd0f222feb1a03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build webform\'s cards based on the current operation.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $operation
   *   The webform submission operation.
   *   Usually \'default\', \'add\', \'edit\', \'edit_all\', \'api\', or \'test\'.
   *
   * @return array
   *   An associative array of webform cards.
   *
   * @see \\Drupal\\webform\\Entity\\Webform::buildPages
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_cards',
         'uses' => 
        array (
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_cards\\WebformCardsManagerInterface',
         'functionName' => 'buildPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54878e28253d0756093daa60f9f3b338' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Update cards pages based on conditional logic (#states).
   *
   * @param array $pages
   *   An associative array of webform cards.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   A webform submission.
   *
   * @return array
   *   An associative array of webform cards with conditional logic applied.
   *
   * @see \\Drupal\\webform\\Entity\\Webform::getPages
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_cards',
         'uses' => 
        array (
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_cards\\WebformCardsManagerInterface',
         'functionName' => 'applyConditions',
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
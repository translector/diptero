<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/RequirementsPageTrait.php-1594234425',
   'data' => 
  array (
    '7ee89d96e3e4c2560b933b7a9e785e1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods for the requirements page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\RequirementsPageTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f9ca5e91c617e8b6dc0c35adf9e22a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles the update requirements page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\RequirementsPageTrait',
         'functionName' => 'updateRequirementsProblem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b84470dff978cf59735de7626d5c430e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Continues installation when the expected warnings are found.
   *
   * This function is no longer called by any core test, but it is retained for
   * use by contrib/custom tests. It is not deprecated, because it remains the
   * recommended function to call for its purpose.
   *
   * @param string[] $expected_warnings
   *   A list of warning summaries to expect on the requirements screen (e.g.
   *   \'PHP\', \'PHP OPcode caching\', etc.). If only the expected warnings
   *   are found, the test will click the "continue anyway" link to go to the
   *   next screen of the installer. If an expected warning is not found, or if
   *   a warning not in the list is present, a fail is raised.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\RequirementsPageTrait',
         'functionName' => 'continueOnExpectedWarnings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c02983493e792adc2f4d4b6b452a8f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert the given warning summaries are present on the page.
   *
   * If an expected warning is not found, or if a warning not in the list is
   * present, a fail is raised.
   *
   * @param string[] $warning_summaries
   *   A list of warning summaries to expect on the requirements screen (e.g.
   *   \'PHP\', \'PHP OPcode caching\', etc.).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\RequirementsPageTrait',
         'functionName' => 'assertWarningSummaries',
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
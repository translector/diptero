<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_node/tests/src/Traits/WebformNodeBrowserTestTrait.php-1594690523',
   'data' => 
  array (
    'b61cfe90d43f4358f72a2de167dddfb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides convenience methods for webform node browser tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform_node\\Traits',
         'uses' => 
        array (
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\Tests\\webform_node\\Traits\\WebformNodeBrowserTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a28a9ec8ac671e2a3925bf7a42c3169a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Post a new submission to a webform node.
   *
   * @param \\Drupal\\node\\NodeInterface $node
   *   A Webform node.
   * @param array $edit
   *   Submission values.
   * @param string $submit
   *   Value of the submit button whose click is to be emulated.
   * @param array $options
   *   Options to be forwarded to the url generator.
   *
   * @return int
   *   The created submission\'s sid.
   *
   * @see \\Drupal\\webform\\Tests\\WebformTestBase::postSubmission
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform_node\\Traits',
         'uses' => 
        array (
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\Tests\\webform_node\\Traits\\WebformNodeBrowserTestTrait',
         'functionName' => 'postNodeSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a9e32fd2f2297ee8a423d5c8a99281f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform_node\\Traits',
         'uses' => 
        array (
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\Tests\\webform_node\\Traits\\WebformNodeBrowserTestTrait',
         'functionName' => 'postNodeSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c14f69cfcd4f5b31f5cecfa6c4126a81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Post a new test submission to a webform node.
   *
   * @param \\Drupal\\node\\NodeInterface $node
   *   A Webform node.
   * @param array $edit
   *   Submission values.
   * @param string $submit
   *   Value of the submit button whose click is to be emulated.
   * @param array $options
   *   Options to be forwarded to the url generator.
   *
   * @return int
   *   The created submission\'s sid.
   *
   * @see \\Drupal\\webform\\Tests\\WebformTestBase::postSubmission
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform_node\\Traits',
         'uses' => 
        array (
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\Tests\\webform_node\\Traits\\WebformNodeBrowserTestTrait',
         'functionName' => 'postNodeSubmissionTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d618a99a70f50fa69364a3333d0fec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform_node\\Traits',
         'uses' => 
        array (
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\Tests\\webform_node\\Traits\\WebformNodeBrowserTestTrait',
         'functionName' => 'postNodeSubmissionTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb32a26ffd7c0e82c1c7c37999fe1980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a webform node.
   *
   * @param string $webform_id
   *   A webform id.
   * @param array $settings
   *   (optional) An associative array of settings for the node, as used in
   *   entity_create().
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A webform node.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform_node\\Traits',
         'uses' => 
        array (
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\Tests\\webform_node\\Traits\\WebformNodeBrowserTestTrait',
         'functionName' => 'createWebformNode',
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
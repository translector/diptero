<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/tests/src/Kernel/BlazyManagerTest.php-1588969110',
   'data' => 
  array (
    'd8d302fa3e89b73f1b31a28f04b390cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the Blazy manager methods.
 *
 * @coversDefaultClass \\Drupal\\blazy\\BlazyManager
 * @requires module media
 *
 * @group blazy
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1137c49af01f911a1bbdf8b3510072fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9041fa2b4b7f2cec83c7013456a356fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests BlazyManager image.
   *
   * @param array $settings
   *   The settings being tested.
   * @param bool $expected_has_responsive_image
   *   Has the responsive image style ID.
   *
   * @covers ::preRenderBlazy
   * @covers \\Drupal\\blazy\\BlazyLightbox::build
   * @covers \\Drupal\\blazy\\BlazyLightbox::buildCaptions
   * @dataProvider providerTestPreRenderImage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'testPreRenderImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fea21cab22f7a02d80612dc21d344f2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide test cases for ::testPreRenderImage().
   *
   * @return array
   *   An array of tested data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'providerTestPreRenderImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7f6b093bb415806c88ca5b47a4a8793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests building Blazy attributes.
   *
   * @param array $settings
   *   The settings being tested.
   * @param bool $use_uri
   *   Whether to provide image URI, or not.
   * @param bool $iframe
   *   Whether to expect an iframe, or not.
   * @param mixed|bool|int $expected
   *   The expected output.
   *
   * @covers \\Drupal\\blazy\\Blazy::preprocessBlazy
   * @covers \\Drupal\\blazy\\Blazy::urlAndDimensions
   * @covers \\Drupal\\blazy\\BlazyDefault::entitySettings
   * @dataProvider providerPreprocessBlazy
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'testPreprocessBlazy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '555efa181f1f45f26344f799d2265c0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provider for ::testPreprocessBlazy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'providerPreprocessBlazy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3aeecbddd9e2c4f15f60347a9658a980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests responsive image integration.
   *
   * @param string $responsive_image_style_id
   *   The responsive_image_style_id.
   * @param bool $expected
   *   The expected output_image_tag.
   *
   * @dataProvider providerResponsiveImage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'testPreprocessResponsiveImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe938668a7a3afeb96133ffe184bc0d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provider for ::testPreprocessResponsiveImage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'providerResponsiveImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bfb652031195f789a5a186b9260715d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests cases for various methods.
   *
   * @covers ::attach
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\blazy\\Kernel',
         'uses' => 
        array (
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
        ),
         'className' => 'Drupal\\Tests\\blazy\\Kernel\\BlazyManagerTest',
         'functionName' => 'testBlazyManagerMethods',
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
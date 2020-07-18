<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/tests/src/Kernel/FieldOutputTest.php-1587685827,/var/www/html/web/modules/contrib/video_embed_field/tests/src/Kernel/StripWhitespaceTrait.php-1587685827',
   'data' => 
  array (
    '82ee1601b0459c71a882513f2b95b4cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test the embed field formatters are functioning.
 *
 * @group video_embed_field
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Kernel',
         'uses' => 
        array (
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'thumbnail' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Thumbnail',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Kernel\\FieldOutputTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2dadcb39d95af267ed451b0010ec59d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Strip whitespace.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Kernel',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Kernel\\FieldOutputTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16e29d78a3a6dc561aeb9efeca0490e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove HTML whitespace from a string.
   *
   * @param string $string
   *   The input string.
   *
   * @return string
   *   The whitespace cleaned string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Kernel',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Kernel\\FieldOutputTest',
         'functionName' => 'stripWhitespace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aa85ef1a288c9f8dca1abdaf2da645b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test cases.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Kernel',
         'uses' => 
        array (
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'thumbnail' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Thumbnail',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Kernel\\FieldOutputTest',
         'functionName' => 'renderedFieldTestCases',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b005d82cb59b00420fe134e572e8087b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the embed field.
   *
   * @dataProvider renderedFieldTestCases
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Kernel',
         'uses' => 
        array (
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'thumbnail' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Thumbnail',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Kernel\\FieldOutputTest',
         'functionName' => 'testEmbedField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '467bd739dbd56a32378be4ae11cacfb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get and prepare the output of a field.
   *
   * @param string $url
   *   The video URL.
   * @param array $settings
   *   An array of formatter settings.
   *
   * @return array
   *   The rendered prepared field output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Kernel',
         'uses' => 
        array (
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'thumbnail' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Thumbnail',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Kernel\\FieldOutputTest',
         'functionName' => 'getPreparedFieldOutput',
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
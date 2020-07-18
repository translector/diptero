<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Kernel/UrlTest.php-1586203134',
   'data' => 
  array (
    '653a70b6a8f8be55b08f53e5961299ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test generic url token replacements.
 *
 * @group token
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd3962367df60c6b509cd0806315717d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token service.
   *
   * @var \\Drupal\\Core\\Utility\\Token
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d39a2d44d06ed6068f900cedf81771c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8c7ab6c5981d38d5d311238550b2657' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\CurrentRouteMatch
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bc3e7516d81eb0f0be8201b259dab0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e9d2d14c25a501fc33336d6f795db4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the url token replacements for current requests.
   *
   * The method ::expectedCurrentRequestUrlResults() is not declared
   * as a regular data provider, because it might use services from
   * the global Drupal container, which is not initialized yet during
   * the invocation of data providers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => 'testCurrentRequestUrls',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5360a6a22cd591a8e7992624f32db760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a list of results to expect for ::testRequestUrls().
   *
   * Each data set of this array holds the following order:
   *   - The request object to test for.
   *   - The input text as string.
   *   - The token data as array.
   *   - Further options for the token replacement as array.
   *   - The output to expect after token replacement.
   *
   * @return array
   *   The list of results to expect.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\UrlTest',
         'functionName' => 'expectedCurrentRequestUrlResults',
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
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Path/CurrentPathStack.php-1594234425',
   'data' => 
  array (
    '4dcfc8bc835a4eaffd4707435e0e279b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents the current path for the current request.
 *
 * Note: You should not rely on paths but rather on route names / parameters or
 *   other indicators like context. For some fundamental parts, like routing or
 *   path processing, there is unfortunately no way around dealing with paths.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Path\\CurrentPathStack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bfaacdbdb0c7a22ff35a55aef821cfb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache of paths.
   *
   * @var \\SplObjectStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Path\\CurrentPathStack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '342ef8ea295b1bdba8c986d33a56b85a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Path\\CurrentPathStack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7fac32c1195653fccb12810ef99f586' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CurrentPathStack instance.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Path\\CurrentPathStack',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50842f2ebeafa8206eb2b27750f3a356' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the path of the current request.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   (optional) The request.
   *
   * @return string
   *   Returns the path, without leading slashes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Path\\CurrentPathStack',
         'functionName' => 'getPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '602e6db70014a39d10f78aadc27dec07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the current path.
   *
   * @param string $path
   *   The path.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   (optional) The request.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Path\\CurrentPathStack',
         'functionName' => 'setPath',
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
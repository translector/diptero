<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/MetadataBubblingUrlGenerator.php-1594234425',
   'data' => 
  array (
    'b6f1484f797c4a0e57ee1a65a3c3931b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Decorator for the URL generator, which bubbles bubbleable URL metadata.
 *
 * Implements a decorator for the URL generator that allows to automatically
 * collect and bubble up bubbleable metadata associated with URLs due to
 * outbound path and route processing. This approach helps keeping the render
 * and the routing subsystems decoupled.
 *
 * @see \\Drupal\\Core\\RouteProcessor\\OutboundRouteProcessorInterface
 * @see \\Drupal\\Core\\PathProcessor\\OutboundPathProcessorInterface
 * @see \\Drupal\\Core\\Render\\BubbleableMetadata
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd97e58fc10a03278eff1233c9b51f55f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The non-bubbling URL generator.
   *
   * @var \\Drupal\\Core\\Routing\\UrlGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34ba46b1c7dc344938b6646a36510a0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b6fb1fb3c8ec42f85385d7b3830ff72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new bubbling URL generator service.
   *
   * @param \\Drupal\\Core\\Routing\\UrlGeneratorInterface $url_generator
   *   The non-bubbling URL generator.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '077f9ae39b8872d2a7c41bf2a7e58afe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'setContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44f723029407c32880bf51c9c8106e09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'getContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e722ed32b51cad9db350c58c28894c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'getPathFromRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a85feef7609f6460fc8fcc693aad480d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Bubbles the bubbleable metadata to the current render context.
   *
   * @param \\Drupal\\Core\\GeneratedUrl $generated_url
   *   The generated URL whose bubbleable metadata to bubble.
   * @param array $options
   *   (optional) The URL options. Defaults to none.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'bubble',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c9b5ee43506d4e2f5b9c5e5c9ee871c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'generate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd33b88db9b203ae9b102c2e3b54172ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'generateFromRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69044ad14b039e080b424e94552f1e7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'supports',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d5a8c3a5c1f3d0668721cf71ab8a4d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'generatedurl' => 'Drupal\\Core\\GeneratedUrl',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'symfonyrequestcontext' => 'Symfony\\Component\\Routing\\RequestContext',
        ),
         'className' => 'Drupal\\Core\\Render\\MetadataBubblingUrlGenerator',
         'functionName' => 'getRouteDebugMessage',
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
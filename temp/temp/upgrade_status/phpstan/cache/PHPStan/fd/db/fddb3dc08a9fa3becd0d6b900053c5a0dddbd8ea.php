<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/PathProcessor/OutboundPathProcessorInterface.php-1594234425',
   'data' => 
  array (
    'ac9861f4513333f344573dcd1cfca1a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for classes that process the outbound path.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\PathProcessor',
         'uses' => 
        array (
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\PathProcessor\\OutboundPathProcessorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfa35ebad9d249c0205638248dd3904b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the outbound path.
   *
   * @param string $path
   *   The path to process, with a leading slash.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'query\': An array of query key/value-pairs (without any URL-encoding)
   *     to append to the URL.
   *   - \'fragment\': A fragment identifier (named anchor) to append to the URL.
   *     Do not include the leading \'#\' character.
   *   - \'absolute\': Defaults to FALSE. Whether to force the output to be an
   *     absolute link (beginning with http:). Useful for links that will be
   *     displayed outside the site, such as in an RSS feed.
   *   - \'language\': An optional language object used to look up the alias
   *     for the URL. If $options[\'language\'] is omitted, it defaults to the
   *     current language for the language type LanguageInterface::TYPE_URL.
   *   - \'https\': Whether this URL should point to a secure location. If not
   *     defined, the current scheme is used, so the user stays on HTTP or HTTPS
   *     respectively. TRUE enforces HTTPS and FALSE enforces HTTP.
   *   - \'base_url\': Only used internally by a path processor, for example, to
   *     modify the base URL when a language dependent URL requires so.
   *   - \'prefix\': Only used internally, to modify the path when a language
   *     dependent URL requires so.
   *   - \'route\': The route object for the given path. It will be set by
   *     \\Drupal\\Core\\Routing\\UrlGenerator::generateFromRoute().
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The HttpRequest object representing the current request.
   * @param \\Drupal\\Core\\Render\\BubbleableMetadata $bubbleable_metadata
   *   (optional) Object to collect path processors\' bubbleable metadata.
   *
   * @return string
   *   The processed path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\PathProcessor',
         'uses' => 
        array (
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\PathProcessor\\OutboundPathProcessorInterface',
         'functionName' => 'processOutbound',
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
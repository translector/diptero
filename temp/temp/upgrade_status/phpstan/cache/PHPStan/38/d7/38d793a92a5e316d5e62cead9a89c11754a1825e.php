<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/filter/src/FilterProcessResult.php-1594234425',
   'data' => 
  array (
    '112ff8b262b5c5516091e8f81202531a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Used to return values from a text filter plugin\'s processing method.
 *
 * The typical use case for a text filter plugin\'s processing method is to just
 * apply some filtering to the given text, but for more advanced use cases,
 * it may be necessary to also:
 * - Declare asset libraries to be loaded.
 * - Declare cache tags that the filtered text depends upon, so when either of
 *   those cache tags is invalidated, the filtered text should also be
 *   invalidated.
 * - Declare cache context to vary by, e.g. \'language\' to do language-specific
 *   filtering.
 * - Declare a maximum age for the filtered text.
 * - Apply uncacheable filtering, for example because it differs per user.
 *
 * In case a filter needs one or more of these advanced use cases, it can use
 * the additional methods available.
 *
 * The typical use case:
 * @code
 * public function process($text, $langcode) {
 *   // Modify $text.
 *
 *   return new FilterProcessResult($text);
 * }
 * @endcode
 *
 * The advanced use cases:
 * @code
 * public function process($text, $langcode) {
 *   // Modify $text.
 *
 *   $result = new FilterProcessResult($text);
 *
 *   // Associate assets to be attached.
 *   $result->setAttachments(array(
 *     \'library\' => array(
 *        \'filter/caption\',
 *     ),
 *   ));
 *
 *   // Associate cache contexts to vary by.
 *   $result->setCacheContexts([\'language\']);
 *
 *   // Associate cache tags to be invalidated by.
 *   $result->setCacheTags($node->getCacheTags());
 *
 *   // Associate a maximum age.
 *   $result->setCacheMaxAge(300); // 5 minutes.
 *
 *   return $result;
 * }
 * @endcode
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ae525a6275ff193145cbeb26895a16e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The processed text.
   *
   * @see \\Drupal\\filter\\Plugin\\FilterInterface::process()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '799279726977d64e681bae1bdbf42b26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a FilterProcessResult object.
   *
   * @param string $processed_text
   *   The text as processed by a text filter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a834ff310751077fa770b41ca0f6c33b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the processed text.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => 'getProcessedText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8851a89c3b718dc95eb23fe14018d7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the processed text.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => '__toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aef39ad9457672bbf5fcd8125536639c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the processed text.
   *
   * @param string $processed_text
   *   The text as processed by a text filter.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => 'setProcessedText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e10afcdf958a706b42d29fc489722b32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a placeholder.
   *
   * This generates its own placeholder markup for one major reason: to not have
   * FilterProcessResult depend on the Renderer service, because this is a value
   * object. As a side-effect and added benefit, this makes it easier to
   * distinguish placeholders for filtered text versus generic render system
   * placeholders.
   *
   * @param string $callback
   *   The #lazy_builder callback that will replace the placeholder with its
   *   eventual markup.
   * @param array $args
   *   The arguments for the #lazy_builder callback.
   *
   * @return string
   *   The placeholder markup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\filter\\FilterProcessResult',
         'functionName' => 'createPlaceholder',
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
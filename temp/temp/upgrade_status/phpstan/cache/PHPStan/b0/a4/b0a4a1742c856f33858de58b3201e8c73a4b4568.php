<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/filter/filter.module-1594234425',
   'data' => 
  array (
    'c4a3eb815f51a1cdf3ecd6b56bd362e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_help',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8627c32d9a02a2a48e2ceecef583dd9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_theme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6463d27e29c1da51170739a283cac7ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves a list of enabled text formats, ordered by weight.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
 *   (optional) If provided, only those formats that are allowed for this user
 *   account will be returned. All enabled formats will be returned otherwise.
 *   Defaults to NULL.
 *
 * @return \\Drupal\\filter\\FilterFormatInterface[]
 *   An array of text format objects, keyed by the format ID and ordered by
 *   weight.
 *
 * @see filter_formats_reset()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_formats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '717467e1180dedd5316fbd9ac625e3f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Resets the text format caches.
 *
 * @see filter_formats()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_formats_reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2b92ae4a616cc106312a34836ecca2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves a list of roles that are allowed to use a given text format.
 *
 * @param \\Drupal\\filter\\FilterFormatInterface $format
 *   An object representing the text format.
 *
 * @return array
 *   An array of role names, keyed by role ID.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_get_roles_by_format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26be9db846dd6c9161d7f3a75c298f54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves a list of text formats that are allowed for a given role.
 *
 * @param string $rid
 *   The user role ID to retrieve text formats for.
 *
 * @return \\Drupal\\filter\\FilterFormatInterface[]
 *   An array of text format objects that are allowed for the role, keyed by
 *   the text format ID and ordered by weight.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_get_formats_by_role',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fab5d66fbbed2ef800e5540b9ba01640' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the ID of the default text format for a particular user.
 *
 * The default text format is the first available format that the user is
 * allowed to access, when the formats are ordered by weight. It should
 * generally be used as a default choice when presenting the user with a list
 * of possible text formats (for example, in a node creation form).
 *
 * Conversely, when existing content that does not have an assigned text format
 * needs to be filtered for display, the default text format is the wrong
 * choice, because it is not guaranteed to be consistent from user to user, and
 * some trusted users may have an unsafe text format set by default, which
 * should not be used on text of unknown origin. Instead, the fallback format
 * returned by filter_fallback_format() should be used, since that is intended
 * to be a safe, consistent format that is always available to all users.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
 *   (optional) The user account to check. Defaults to the currently logged-in
 *   user. Defaults to NULL.
 *
 * @return string
 *   The ID of the user\'s default text format.
 *
 * @see filter_fallback_format()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_default_format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ce0547a6d2ddfc44e22834910d6e114' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the ID of the fallback text format that all users have access to.
 *
 * The fallback text format is a regular text format in every respect, except
 * it does not participate in the filter permission system and cannot be
 * disabled. It needs to exist because any user who has permission to create
 * formatted content must always have at least one text format they can use.
 *
 * Because the fallback format is available to all users, it should always be
 * configured securely. For example, when the Filter module is installed, this
 * format is initialized to output plain text. Installation profiles and site
 * administrators have the freedom to configure it further.
 *
 * Note that the fallback format is completely distinct from the default format,
 * which differs per user and is simply the first format which that user has
 * access to. The default and fallback formats are only guaranteed to be the
 * same for users who do not have access to any other format; otherwise, the
 * fallback format\'s weight determines its placement with respect to the user\'s
 * other formats.
 *
 * Any modules implementing a format deletion functionality must not delete this
 * format.
 *
 * @return string|null
 *   The ID of the fallback text format.
 *
 * @see hook_filter_format_disable()
 * @see filter_default_format()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_fallback_format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecc8e4ea0982c19d501b412d3636e373' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs all the enabled filters on a piece of text.
 *
 * Note: Because filters can inject JavaScript or execute PHP code, security is
 * vital here. When a user supplies a text format, you should validate it using
 * $format->access() before accepting/using it. This is normally done in the
 * validation stage of the Form API. You should for example never make a
 * preview of content in a disallowed format.
 *
 * Note: this function should only be used when filtering text for use elsewhere
 * than on a rendered HTML page. If this is part of a HTML page, then a
 * renderable array with a #type \'processed_text\' element should be used instead
 * of this, because that will allow cacheability metadata to be set and bubbled
 * up and attachments to be associated (assets, placeholders, etc.). In other
 * words: if you are presenting the filtered text in a HTML page, the only way
 * this will be presented correctly, is by using the \'processed_text\' element.
 *
 * @param string $text
 *   The text to be filtered.
 * @param string|null $format_id
 *   (optional) The machine name of the filter format to be used to filter the
 *   text. Defaults to the fallback format. See filter_fallback_format().
 * @param string $langcode
 *   (optional) The language code of the text to be filtered, e.g. \'en\' for
 *   English. This allows filters to be language-aware so language-specific
 *   text replacement can be implemented. Defaults to an empty string.
 * @param array $filter_types_to_skip
 *   (optional) An array of filter types to skip, or an empty array (default)
 *   to skip no filter types. All of the format\'s filters will be applied,
 *   except for filters of the types that are marked to be skipped.
 *   FilterInterface::TYPE_HTML_RESTRICTOR is the only type that cannot be
 *   skipped.
 *
 * @return \\Drupal\\Component\\Render\\MarkupInterface
 *   The filtered text.
 *
 * @see \\Drupal\\filter\\Plugin\\FilterInterface::process()
 *
 * @ingroup sanitization
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'check_markup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bf9c5dabdd10a1d01726ab70b0a8114' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Render API callback: Hides the field value of \'text_format\' elements.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\filter\\Element\\TextFormat::accessDeniedCallback() instead.
 *
 * @see https://www.drupal.org/node/2966725
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_form_access_denied',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '445d8dd9c078fd9a34734c879106c292' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves the filter tips.
 *
 * @param string $format_id
 *   The ID of the text format for which to retrieve tips, or -1 to return tips
 *   for all formats accessible to the current user.
 * @param bool $long
 *   (optional) Boolean indicating whether the long form of tips should be
 *   returned. Defaults to FALSE.
 *
 * @return array
 *   An associative array of filtering tips, keyed by filter name. Each
 *   filtering tip is an associative array with elements:
 *   - tip: Tip text.
 *   - id: Filter ID.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_tips',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11afdab450bab17a0bf255981a6f8e53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for text format guideline templates.
 *
 * Default template: filter-guidelines.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - format: An object representing a text format.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_filter_guidelines',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd551ccc9fabbb9dcf976e6ee75771981' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for text format wrapper templates.
 *
 * Default template: text-format-wrapper.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - attributes: An associative array containing properties of the element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_text_format_wrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cc6032158f8d715abb53a94aab65d83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for filter tips templates.
 *
 * Default template: filter-tips.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - tips: An array containing descriptions and a CSS ID in the form of
 *     \'module-name/filter-id\' (only used when $long is TRUE) for each
 *     filter in one or more text formats. Example:
 *     @code
 *       array(
 *         \'Full HTML\' => array(
 *           0 => array(
 *             \'tip\' => \'Web page addresses and email addresses turn into links automatically.\',
 *             \'id\' => \'filter/2\',
 *           ),
 *         ),
 *       );
 *     @endcode
 *   - long: (optional) Whether the passed-in filter tips contain extended
 *     explanations, i.e. intended to be output on the path \'filter/tips\'
 *     (TRUE), or are in a short format, i.e. suitable to be displayed below a
 *     form element. Defaults to FALSE.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_filter_tips',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aad15dfc99b8d02e24d0732453cee56a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts text into hyperlinks automatically.
 *
 * This filter identifies and makes clickable three types of "links".
 * - URLs like http://example.com.
 * - Email addresses like name@example.com.
 * - Web addresses without the "http://" protocol defined, like
 *   www.example.com.
 * Each type must be processed separately, as there is no one regular
 * expression that could possibly match all of the cases in one pass.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_url',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c906272d76bdda7b3ec083428096a7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Makes links out of absolute URLs.
 *
 * Callback for preg_replace_callback() within _filter_url().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_url_parse_full_links',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '549c546766ddb094ffca76abcba40405' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Makes links out of email addresses.
 *
 * Callback for preg_replace_callback() within _filter_url().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_url_parse_email_links',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a8fcfa1735c03007ef5b23b5d67545b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Makes links out of domain names starting with "www."
 *
 * Callback for preg_replace_callback() within _filter_url().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_url_parse_partial_links',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59d18d056fba2705043d7fd5c767217e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Escapes the contents of HTML comments.
 *
 * Callback for preg_replace_callback() within _filter_url().
 *
 * @param array $match
 *   An array containing matches to replace from preg_replace_callback(),
 *   whereas $match[1] is expected to contain the content to be filtered.
 * @param bool|null $escape
 *   (optional) A Boolean indicating whether to escape (TRUE) or unescape
 *   comments (FALSE). Defaults to NULL, indicating neither. If TRUE, statically
 *   cached $comments are reset.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_url_escape_comments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8f96e69a6099ddc18f8023a17e0a2de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Shortens long URLs to http://www.example.com/long/url…
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_url_trim',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ffef1754734409b8d9fc73b5ea754cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts line breaks into <p> and <br> in an intelligent fashion.
 *
 * Based on: http://photomatt.net/scripts/autop
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_autop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b69eddbe01483b5e346edfaeb37c5014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Escapes all HTML tags, so they will be visible instead of being effective.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_html_escape',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c90e642385ba748cf04341e231331ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Process callback for local image filter.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => '_filter_html_image_secure_process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00a0ead5ad5119d905e21454e08f44ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_filter_secure_image_alter().
 *
 * Formats an image DOM element that has an invalid source.
 *
 * @param DOMElement $image
 *   An IMG node to format, parsed from the filtered text.
 *
 * @see _filter_html_image_secure_process()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => 'filter_filter_secure_image_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7324b9089e76a8cded1fb57c7f5a96e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @} End of "defgroup standard_filters".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'textformat' => 'Drupal\\filter\\Element\\TextFormat',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
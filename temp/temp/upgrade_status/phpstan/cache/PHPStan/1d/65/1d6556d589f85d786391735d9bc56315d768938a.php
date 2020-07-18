<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/filter/src/Plugin/FilterInterface.php-1594234425',
   'data' => 
  array (
    '50b52649e2cdc4dcbf9dccf73e59ed05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for text processing filter plugins.
 *
 * User submitted content is passed through a group of filters before it is
 * output in HTML, in order to remove insecure or unwanted parts, correct or
 * enhance the formatting, transform special keywords, etc. A group of filters
 * is referred to as a "text format". Administrators can create as many text
 * formats as needed. Individual filters can be enabled and configured
 * differently for each text format.
 *
 * @see \\Drupal\\filter\\Entity\\FilterFormat
 *
 * Filtering is a two-step process. First, the content is \'prepared\' by calling
 * the FilterInterface::prepare() method for every filter. The purpose is to
 * escape HTML-like structures. For example, imagine a filter which allows the
 * user to paste entire chunks of programming code without requiring manual
 * escaping of special HTML characters like < or &. If the programming code were
 * left untouched, then other filters could think it was HTML and change it. For
 * many filters, the prepare step is not necessary.
 *
 * The second step is the actual processing step. The result from passing the
 * text through all the filters\' prepare steps gets passed to all the filters
 * again, this time to the FilterInterface::process() method. The process method
 * should then actually change the content: transform URLs into hyperlinks,
 * convert smileys into images, etc.
 *
 * @see \\Drupal\\filter\\Plugin\\FilterInterface::process()
 * @see check_markup()
 *
 * Typically, only text processing is applied, but in more advanced use cases,
 * filters may also:
 * - declare asset libraries to be loaded;
 * - declare cache tags that the resulting filtered text depends upon, so when
 *   either of those cache tags is invalidated, the render-cached HTML that the
 *   filtered text is part of should also be invalidated;
 * - create placeholders to apply uncacheable filtering, for example because it
 *   changes every few seconds.
 *
 * @see \\Drupal\\filter\\Plugin\\FilterInterface::process()
 *
 * Filters are discovered through annotations, which may contain the following
 * definition properties:
 * - title: (required) An administrative summary of what the filter does.
 * - type: (required) A classification of the filter\'s purpose. This is one of
 *   the following:
 *   - FilterInterface::TYPE_HTML_RESTRICTOR: HTML tag and attribute restricting
 *     filters.
 *   - FilterInterface::TYPE_MARKUP_LANGUAGE: Non-HTML markup language filters
 *     that generate HTML.
 *   - FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE: Irreversible transformation
 *     filters.
 *   - FilterInterface::TYPE_TRANSFORM_REVERSIBLE: Reversible transformation
 *     filters.
 * - description: Additional administrative information about the filter\'s
 *   behavior, if needed for clarification.
 * - status: The default status for new instances of the filter. Defaults to
 *   FALSE.
 * - weight: A default weight for new instances of the filter. Defaults to 0.
 * - settings: An associative array containing default settings for new
 *   instances of the filter.
 *
 * Most implementations want to extend the generic basic implementation for
 * filter plugins.
 *
 * @see \\Drupal\\filter\\Annotation\\Filter
 * @see \\Drupal\\filter\\FilterPluginManager
 * @see \\Drupal\\filter\\Plugin\\FilterBase
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bb98285e46bf4b3226a3a218589e4f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Non-HTML markup language filters that generate HTML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a9a77c3246b33d78d09979f85fe2609' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * HTML tag and attribute restricting filters to prevent XSS attacks.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79bb0abbd9bc788e641521390669cec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reversible transformation filters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd2be843a0b199dc4897499b697b1242' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Irreversible transformation filters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f82955f02c80b28e7011b16c4a780e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the processing type of this filter plugin.
   *
   * @return int
   *   One of:
   *   - FilterInterface::TYPE_MARKUP_LANGUAGE
   *   - FilterInterface::TYPE_HTML_RESTRICTOR
   *   - FilterInterface::TYPE_TRANSFORM_REVERSIBLE
   *   - FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'getType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66a945b2b40188cf95c54bf0a3971b19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the administrative label for this filter plugin.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'getLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfbf5c0d5f58a7f8166728d5d633e29e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the administrative description for this filter plugin.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7fc109f1c2a4b877080241821301660' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a filter\'s settings form.
   *
   * @param array $form
   *   A minimally prepopulated form array.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The state of the (entire) configuration form.
   *
   * @return array
   *   The $form array with additional form elements for the settings of this
   *   filter. The submitted form values should match $this->settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61abf9a7c95d4dbd2465f2569129b29d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the text for processing.
   *
   * Filters should not use the prepare method for anything other than escaping,
   * because that would short-circuit the control the user has over the order in
   * which filters are applied.
   *
   * @param string $text
   *   The text string to be filtered.
   * @param string $langcode
   *   The language code of the text to be filtered.
   *
   * @return string
   *   The prepared, escaped text.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '909684ea82db1b50c860ee31fc0062da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs the filter processing.
   *
   * @param string $text
   *   The text string to be filtered.
   * @param string $langcode
   *   The language code of the text to be filtered.
   *
   * @return \\Drupal\\filter\\FilterProcessResult
   *   The filtered text, wrapped in a FilterProcessResult object, and possibly
   *   with associated assets, cacheability metadata and placeholders.
   *
   * @see \\Drupal\\filter\\FilterProcessResult
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7044df10a2debe875f0520b67711be45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns HTML allowed by this filter\'s configuration.
   *
   * May be implemented by filters of the FilterInterface::TYPE_HTML_RESTRICTOR
   * type, this won\'t be used for filters of other types; they should just
   * return FALSE.
   *
   * This callback function is only necessary for filters that strip away HTML
   * tags (and possibly attributes) and allows other modules to gain insight in
   * a generic manner into which HTML tags and attributes are allowed by a
   * format.
   *
   * @return array|false
   *   A nested array with *either* of the following keys:
   *     - \'allowed\': (optional) the allowed tags as keys, and for each of those
   *       tags (keys) either of the following values:
   *       - TRUE to indicate any attribute is allowed
   *       - FALSE to indicate no attributes are allowed
   *       - an array to convey attribute restrictions: the keys must be
   *         attribute names (which may use a wildcard, e.g. "data-*"), the
   *         possible values are similar to the above:
   *           - TRUE to indicate any attribute value is allowed
   *           - FALSE to indicate the attribute is forbidden
   *           - an array to convey attribute value restrictions: the key must
   *             be attribute values (which may use a wildcard, e.g. "xsd:*"),
   *             the possible values are TRUE or FALSE: to mark the attribute
   *             value as allowed or forbidden, respectively
   *     -  \'forbidden_tags\': (optional) the forbidden tags
   *
   *   There is one special case: the "wildcard tag", "*": any attribute
   *   restrictions on that pseudotag apply to all tags.
   *
   *   If no restrictions apply, then FALSE must be returned.
   *
   *   Here is a concrete example, for a very granular filter:
   *     @code
   *     array(
   *       \'allowed\' => array(
   *         // Allows any attribute with any value on the <div> tag.
   *         \'div\' => TRUE,
   *         // Allows no attributes on the <p> tag.
   *         \'p\' => FALSE,
   *         // Allows the following attributes on the <a> tag:
   *         //  - \'href\', with any value;
   *         //  - \'rel\', with the value \'nofollow\' value.
   *         \'a\' => array(
   *           \'href\' => TRUE,
   *           \'rel\' => array(\'nofollow\' => TRUE),
   *         ),
   *         // Only allows the \'src\' and \'alt\' attributes on the <alt> tag,
   *         // with any value.
   *         \'img\' => array(
   *           \'src\' => TRUE,
   *           \'alt\' => TRUE,
   *         ),
   *         // Allow RDFa on <span> tags, using only the dc, foaf, xsd and sioc
   *         // vocabularies/namespaces.
   *         \'span\' => array(
   *           \'property\' => array(\'dc:*\' => TRUE, \'foaf:*\' => TRUE),
   *           \'datatype\' => array(\'xsd:*\' => TRUE),
   *           \'rel\' => array(\'sioc:*\' => TRUE),
   *         ),
   *         // Forbid the \'style\' and \'on*\' (\'onClick\' etc.) attributes on any
   *         // tag.
   *         \'*\' => array(
   *           \'style\' => FALSE,
   *           \'on*\' => FALSE,
   *         ),
   *       )
   *     )
   *     @endcode
   *
   *   A simpler example, for a very coarse filter:
   *     @code
   *     array(
   *       \'forbidden_tags\' => array(\'iframe\', \'script\')
   *     )
   *     @endcode
   *
   *   The simplest example possible: a filter that doesn\'t allow any HTML:
   *     @code
   *     array(
   *       \'allowed\' => array()
   *     )
   *     @endcode
   *
   *   And for a filter that applies no restrictions, i.e. allows any HTML:
   *     @code
   *     FALSE
   *     @endcode
   *
   * @see \\Drupal\\filter\\Entity\\FilterFormatInterface::getHtmlRestrictions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'getHTMLRestrictions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfa96e7a00dd6c6f3dbea56335a24cb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a filter\'s tip.
   *
   * A filter\'s tips should be informative and to the point. Short tips are
   * preferably one-liners.
   *
   * @param bool $long
   *   Whether this callback should return a short tip to display in a form
   *   (FALSE), or whether a more elaborate filter tips should be returned for
   *   template_preprocess_filter_tips() (TRUE).
   *
   * @return string|null
   *   Translated text to display as a tip, or NULL if this filter has no tip.
   *
   * @todo Split into getSummaryItem() and buildGuidelines().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Plugin',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\filter\\Plugin\\FilterInterface',
         'functionName' => 'tips',
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
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/RenderElement.php-1594234425',
   'data' => 
  array (
    'c231c47a8476ae10447e52d6dcd4332d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for render element plugins.
 *
 * Render elements are referenced in render arrays; see the
 * @link theme_render Render API topic @endlink for an overview of render
 * arrays and render elements.
 *
 * The elements of render arrays are divided up into properties (whose keys
 * start with #) and children (whose keys do not start with #). The properties
 * provide data or settings that are used in rendering. Some properties are
 * specific to a particular type of render element, some are available for any
 * render element, and some are available for any form input element. A list of
 * the properties that are available for all render elements follows; the
 * properties that are for all form elements are documented on
 * \\Drupal\\Core\\Render\\Element\\FormElement, and properties specific to a
 * particular element are documented on that element\'s class. See the
 * @link theme_render Render API topic @endlink for a list of the most
 * commonly-used properties.
 *
 * Many of the properties are strings that are displayed to users. These
 * strings, if they are literals provided by your module, should be
 * internationalized and translated; see the
 * @link i18n Internationalization topic @endlink for more information. Note
 * that although in the properties list that follows, they are designated to be
 * of type string, they would generally end up being
 * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup objects instead.
 *
 * Here is the list of the properties used during the rendering of all render
 * elements:
 * - #access: (bool) Whether the element is accessible or not. When FALSE,
 *   the element is not rendered and user-submitted values are not taken
 *   into consideration.
 * - #access_callback: A callable or function name to call to check access.
 *   Argument: element.
 * - #allowed_tags: (array) Array of allowed HTML tags for XSS filtering of
 *   #markup, #prefix, #suffix, etc.
 * - #attached: (array) Array of attachments associated with the element.
 *   See the "Attaching libraries in render arrays" section of the
 *   @link theme_render Render API topic @endlink for an overview, and
 *   \\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface::processAttachments
 *   for a list of what this can contain. Besides this list, it may also contain
 *   a \'placeholders\' element; see the Placeholders section of the
 *   @link theme_render Render API topic @endlink for an overview.
 * - #attributes: (array) HTML attributes for the element. The first-level
 *   keys are the attribute names, such as \'class\', and the attributes are
 *   usually given as an array of string values to apply to that attribute
 *   (the rendering system will concatenate them together into a string in
 *   the HTML output).
 * - #cache: (array) Cache information. See the Caching section of the
 *   @link theme_render Render API topic @endlink for more information.
 * - #children: (array, internal) Array of child elements of this element.
 *   Set and used during the rendering process.
 * - #create_placeholder: (bool) TRUE if the element has placeholders that
 *   are generated by #lazy_builder callbacks. Set internally during rendering
 *   in some cases. See also #attached.
 * - #defaults_loaded: (bool) Set to TRUE during rendering when the defaults
 *   for the element #type have been added to the element.
 * - #id: (string) The HTML ID on the element. This is automatically set for
 *   form elements, but not for all render elements; you can override the
 *   default value or add an ID by setting this property.
 * - #lazy_builder: (array) Array whose first element is a lazy building
 *   callback (callable), and whose second is an array of scalar arguments to
 *   the callback. To use lazy building, the element array must be very
 *   simple: no properties except #lazy_builder, #cache, #weight, and
 *   #create_placeholder, and no children. A lazy builder callback typically
 *   generates #markup and/or placeholders; see the Placeholders section of the
 *   @link theme_render Render API topic @endlink for information about
 *   placeholders.
 * - #markup: (string) During rendering, this will be set to the HTML markup
 *   output. It can also be set on input, as a fallback if there is no
 *   theming for the element. This will be filtered for XSS problems during
 *   rendering; see also #plain_text and #allowed_tags.
 * - #plain_text: (string) Elements can set this instead of #markup. All HTML
 *   tags will be escaped in this text, and if both #plain_text and #markup
 *   are provided, #plain_text is used.
 * - #post_render: (array) Array of callables or function names, which are
 *   called after the element is rendered. Arguments: rendered element string,
 *   children.
 * - #pre_render: (array) Array of callables or function names, which are
 *   called just before the element is rendered. Argument: $element.
 *   Return value: an altered $element.
 * - #prefix: (string) Text to render before the entire element output. See
 *   also #suffix. If it is not already wrapped in a safe markup object, will
 *   be filtered for XSS safety.
 * - #printed: (bool, internal) Set to TRUE when an element and its children
 *   have been rendered.
 * - #render_children: (bool, internal) Set to FALSE by the rendering process
 *   if the #theme call should be bypassed (normally, the theme is used to
 *   render the children). Set to TRUE by the rendering process if the children
 *   should be rendered by rendering each one separately and concatenating.
 * - #suffix: (string) Text to render after the entire element output. See
 *   also #prefix. If it is not already wrapped in a safe markup object, will
 *   be filtered for XSS safety.
 * - #theme: (string) Name of the theme hook to use to render the element.
 *   A default is generally set for elements; users of the element can
 *   override this (typically by adding __suggestion suffixes).
 * - #theme_wrappers: (array) Array of theme hooks, which are invoked
 *   after the element and children are rendered, and before #post_render
 *   functions.
 * - #type: (string) The machine name of the type of render/form element.
 * - #weight: (float) The sort order for rendering, with lower numbers coming
 *   before higher numbers. Default if not provided is zero; elements with
 *   the same weight are rendered in the order they appear in the render
 *   array.
 *
 * @see \\Drupal\\Core\\Render\\Annotation\\RenderElement
 * @see \\Drupal\\Core\\Render\\ElementInterface
 * @see \\Drupal\\Core\\Render\\ElementInfoManager
 * @see plugin_api
 *
 * @ingroup theme_render
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58a736610e40bcaf53d814a0e4cd5bc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderElement',
         'functionName' => 'setAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6850162148533b325650b822e7dbd19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds members of this group as actual elements for rendering.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   element.
   *
   * @return array
   *   The modified element with all group members.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderElement',
         'functionName' => 'preRenderGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b26f98552dd7792994ba587a6b268f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form element processing handler for the #ajax form property.
   *
   * This method is useful for non-input elements that can be used in and
   * outside the context of a form.
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   *
   * @see self::preRenderAjaxForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderElement',
         'functionName' => 'processAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9892c1655268ea99d219cd50a57226e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds Ajax information about an element to communicate with JavaScript.
   *
   * If #ajax is set on an element, this additional JavaScript is added to the
   * page header to attach the Ajax behaviors. See ajax.js for more information.
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   *   Properties used:
   *   - #ajax[\'event\']
   *   - #ajax[\'prevent\']
   *   - #ajax[\'url\']
   *   - #ajax[\'callback\']
   *   - #ajax[\'options\']
   *   - #ajax[\'wrapper\']
   *   - #ajax[\'parameters\']
   *   - #ajax[\'effect\']
   *   - #ajax[\'accepts\']
   *
   * @return array
   *   The processed element with the necessary JavaScript attached to it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderElement',
         'functionName' => 'preRenderAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a2ad240d6ce7c7b7fb4599bd8b58b2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Arranges elements into groups.
   *
   * This method is useful for non-input elements that can be used in and
   * outside the context of a form.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   element. Note that $element must be taken by reference here, so processed
   *   child elements are taken over into $form_state.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderElement',
         'functionName' => 'processGroup',
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
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.4.8',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":1:{s:8:"children";a:49:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:49:"Provides a base class for render element plugins.";}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:56:"Render elements are referenced in render arrays; see the";}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:92:"theme_render Render API topic @endlink for an overview of render
arrays and render elements.";}}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:642:"The elements of render arrays are divided up into properties (whose keys
start with #) and children (whose keys do not start with #). The properties
provide data or settings that are used in rendering. Some properties are
specific to a particular type of render element, some are available for any
render element, and some are available for any form input element. A list of
the properties that are available for all render elements follows; the
properties that are for all form elements are documented on
\\Drupal\\Core\\Render\\Element\\FormElement, and properties specific to a
particular element are documented on that element\'s class. See the";}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:87:"theme_render Render API topic @endlink for a list of the most
commonly-used properties.";}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:176:"Many of the properties are strings that are displayed to users. These
strings, if they are literals provided by your module, should be
internationalized and translated; see the";}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:261:"i18n Internationalization topic @endlink for more information. Note
that although in the properties list that follows, they are designated to be
of type string, they would generally end up being
\\Drupal\\Core\\StringTranslation\\TranslatableMarkup objects instead.";}}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:84:"Here is the list of the properties used during the rendering of all render
elements:";}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:159:"- #access: (bool) Whether the element is accessible or not. When FALSE,
the element is not rendered and user-submitted values are not taken
into consideration.";}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:91:"- #access_callback: A callable or function name to call to check access.
Argument: element.";}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:72:"- #allowed_tags: (array) Array of allowed HTML tags for XSS filtering of";}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:31:"#markup, #prefix, #suffix, etc.";}i:16;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:132:"- #attached: (array) Array of attachments associated with the element.
See the "Attaching libraries in render arrays" section of the";}i:17;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:275:"theme_render Render API topic @endlink for an overview, and
\\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface::processAttachments
for a list of what this can contain. Besides this list, it may also contain
a \'placeholders\' element; see the Placeholders section of the";}}i:18;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:55:"theme_render Render API topic @endlink for an overview.";}}i:19;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:211:"- #attributes: (array) HTML attributes for the element. The first-level
keys are the attribute names, such as \'class\', and the attributes are
usually given as an array of string values to apply to that attribute";}i:20;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:87:"(the rendering system will concatenate them together into a string in
the HTML output).";}i:21;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:67:"- #cache: (array) Cache information. See the Caching section of the";}i:22;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:60:"theme_render Render API topic @endlink for more information.";}}i:23;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:114:"- #children: (array, internal) Array of child elements of this element.
Set and used during the rendering process.";}i:24;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:180:"- #create_placeholder: (bool) TRUE if the element has placeholders that
are generated by #lazy_builder callbacks. Set internally during rendering
in some cases. See also #attached.";}i:25;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:127:"- #defaults_loaded: (bool) Set to TRUE during rendering when the defaults
for the element #type have been added to the element.";}i:26;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:195:"- #id: (string) The HTML ID on the element. This is automatically set for
form elements, but not for all render elements; you can override the
default value or add an ID by setting this property.";}i:27;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:274:"- #lazy_builder: (array) Array whose first element is a lazy building
callback (callable), and whose second is an array of scalar arguments to
the callback. To use lazy building, the element array must be very
simple: no properties except #lazy_builder, #cache, #weight, and";}i:28;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:146:"#create_placeholder, and no children. A lazy builder callback typically
generates #markup and/or placeholders; see the Placeholders section of the";}i:29;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:74:"theme_render Render API topic @endlink for information about
placeholders.";}}i:30;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:261:"- #markup: (string) During rendering, this will be set to the HTML markup
output. It can also be set on input, as a fallback if there is no
theming for the element. This will be filtered for XSS problems during
rendering; see also #plain_text and #allowed_tags.";}i:31;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:180:"- #plain_text: (string) Elements can set this instead of #markup. All HTML
tags will be escaped in this text, and if both #plain_text and #markup
are provided, #plain_text is used.";}i:32;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:155:"- #post_render: (array) Array of callables or function names, which are
called after the element is rendered. Arguments: rendered element string,
children.";}i:33;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:169:"- #pre_render: (array) Array of callables or function names, which are
called just before the element is rendered. Argument: $element.
Return value: an altered $element.";}i:34;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:173:"- #prefix: (string) Text to render before the entire element output. See
also #suffix. If it is not already wrapped in a safe markup object, will
be filtered for XSS safety.";}i:35;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:93:"- #printed: (bool, internal) Set to TRUE when an element and its children
have been rendered.";}i:36;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:290:"- #render_children: (bool, internal) Set to FALSE by the rendering process
if the #theme call should be bypassed (normally, the theme is used to
render the children). Set to TRUE by the rendering process if the children
should be rendered by rendering each one separately and concatenating.";}i:37;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:172:"- #suffix: (string) Text to render after the entire element output. See
also #prefix. If it is not already wrapped in a safe markup object, will
be filtered for XSS safety.";}i:38;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:196:"- #theme: (string) Name of the theme hook to use to render the element.
A default is generally set for elements; users of the element can
override this (typically by adding __suggestion suffixes).";}i:39;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:146:"- #theme_wrappers: (array) Array of theme hooks, which are invoked
after the element and children are rendered, and before #post_render
functions.";}i:40;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:70:"- #type: (string) The machine name of the type of render/form element.";}i:41;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:219:"- #weight: (float) The sort order for rendering, with lower numbers coming
before higher numbers. Default if not provided is zero; elements with
the same weight are rendered in the order they appear in the render
array.";}i:42;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:43;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:44:"\\Drupal\\Core\\Render\\Annotation\\RenderElement";}}i:44;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:36:"\\Drupal\\Core\\Render\\ElementInterface";}}i:45;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:38:"\\Drupal\\Core\\Render\\ElementInfoManager";}}i:46;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:10:"plugin_api";}}i:47;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":1:{s:4:"text";s:0:"";}i:48;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":2:{s:4:"name";s:8:"@ingroup";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":1:{s:5:"value";s:12:"theme_render";}}}}',
));
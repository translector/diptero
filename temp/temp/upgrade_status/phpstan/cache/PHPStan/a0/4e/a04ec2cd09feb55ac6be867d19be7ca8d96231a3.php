<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Field/FieldFilteredMarkup.php-1594234425,/var/www/html/web/core/lib/Drupal/Component/Render/MarkupTrait.php-1594234425',
   'data' => 
  array (
    'a07520f30e484fa8611f47147a58f395' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an object that passes safe strings through the Field system.
 *
 * This object filters the string using a very restrictive tag list when it is
 * created.
 *
 * @internal
 *   This object is marked as internal because it should only be used by the
 *   Field module and field-related plugins.
 *
 * @see \\Drupal\\Core\\Render\\Markup
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'markuptrait' => 'Drupal\\Component\\Render\\MarkupTrait',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '024efeeb6d7b45f6565522077bfaeb44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements MarkupInterface and Countable for rendered objects.
 *
 * @see \\Drupal\\Component\\Render\\MarkupInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9714dd811b665a84bd3710ecb0ef9d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The safe string.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78bf5bebddc09e7e6f49f02e3d1f4559' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a Markup object if necessary.
   *
   * If $string is equal to a blank string then it is not necessary to create a
   * Markup object. If $string is an object that implements MarkupInterface it
   * is returned unchanged.
   *
   * @param mixed $string
   *   The string to mark as safe. This value will be cast to a string.
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   A safe string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '440b550df3cb2833b2447d8a66e9e4ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the string version of the Markup object.
   *
   * @return string
   *   The safe string content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => '__toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7f63ab1a0423cf1e3c1358161932ca2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the string length.
   *
   * @return int
   *   The length of the string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => 'count',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11b7929de009fe91ff294f7cd60efa04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a representation of the object for use in JSON serialization.
   *
   * @return string
   *   The safe string content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => 'jsonSerialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b579a05e92e70c2c4bd1852283a1a42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Component\\Render\\MarkupTrait::create().
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   A safe string filtered with the allowed tag list and normalized.
   *
   * @see \\Drupal\\Core\\Field\\FieldFilteredMarkup::allowedTags()
   * @see \\Drupal\\Component\\Utility\\Xss::filter()
   * @see \\Drupal\\Component\\Utility\\Html::normalize()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'markuptrait' => 'Drupal\\Component\\Render\\MarkupTrait',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94ea892c36b3383d61fc6a6b87cedaa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the allowed tag list.
   *
   * @return string[]
   *   A list of allowed tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'markuptrait' => 'Drupal\\Component\\Render\\MarkupTrait',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => 'allowedTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '418576958bf1128e4186d414097b8318' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a human-readable list of allowed tags for display in help texts.
   *
   * @return string
   *   A human-readable list of allowed tags for display in help texts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'markuptrait' => 'Drupal\\Component\\Render\\MarkupTrait',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
         'functionName' => 'displayAllowedTags',
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
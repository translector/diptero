<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformTermSelect.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Element/WebformTermReferenceTrait.php-1594241402',
   'data' => 
  array (
    '3602c400e5aa579efcf48de2da8a24b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform element for a term select menu.
 *
 * @FormElement("webform_term_select")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'select' => 'Drupal\\Core\\Render\\Element\\Select',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2379f2df17daee002c9bba20fab3248' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for term reference elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '636d0b37bc20d8cb0d78191674c68f75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set referencable term entities as options for an element.
   *
   * @param array $element
   *   An element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2cdcd1a806a03128f339904656730a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get options to term breadcrumb.
   *
   * @param array $element
   *   The term reference element.
   * @param string $language
   *   The language to be displayed.
   *
   * @return array
   *   An associative array of term options formatted as a breadcrumbs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'getOptionsBreadcrumb',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fb4d92bc4cd064378d753a7cc2dd206' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'getOptionsBreadcrumb',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdff7ec0ca70796512e9a4fcb82e9c46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get options to term tree.
   *
   * @param array $element
   *   The term reference element.
   * @param string $language
   *   The language to be displayed.
   *
   * @return array
   *   An associative array of term options formatted as a tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'getOptionsTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3422398b7093df9c4ba13db994c8b4b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'getOptionsTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a21faae167d366417b4ab6381908e02d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all terms in a given vocabulary ID.
   *
   * @param string $vid
   *   Vocabulary ID to retrieve terms for.
   *
   * @return object[]|\\Drupal\\taxonomy\\TermInterface[]
   *   An array of term objects that are the children of the vocabulary $vid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'loadTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0920e4caca4fb9bc62c2f3fbf6994dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\taxonomy\\TermStorageInterface $taxonomy_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'loadTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20717e29718fe50987477867b7fd223d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'select' => 'Drupal\\Core\\Render\\Element\\Select',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e09babd9f40c4ff9eb1e0c908b9fb579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'select' => 'Drupal\\Core\\Render\\Element\\Select',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTermSelect',
         'functionName' => 'processSelect',
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
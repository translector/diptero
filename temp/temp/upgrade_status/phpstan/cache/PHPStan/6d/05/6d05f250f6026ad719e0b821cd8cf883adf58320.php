<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformOptionsListBuilder.php-1594690523,/var/www/html/web/modules/contrib/webform/src/EntityListBuilder/WebformEntityListBuilderSortLabelTrait.php-1594690523',
   'data' => 
  array (
    '7264ba8c9c3f2018ab5be56ea0e0d7e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a class to build a listing of webform options entities.
 *
 * @see \\Drupal\\webform\\Entity\\WebformOption
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ceecfb0951bb888bb5ff336faa22603' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait class for Webform Entity List Builder sorting by label.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EntityListBuilder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e87b559911ec5d10210514545a9035a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads entity IDs using a pager sorted by the entity label (instead of id).
   *
   * @return array
   *   An array of entity IDs.
   *
   * @see \\Drupal\\Core\\Entity\\EntityListBuilder::getEntityIds
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EntityListBuilder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'getEntityIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f61872fc93f864778c786dd97e963e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Search keys.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a867580a3c47d78f53508bfcd172806' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Search category.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70c1b8dedee24febef04bdbe771bf239' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef6e5a928d6ca72d5245d84099182980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformOptionsListBuilder $instance */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd40e6db5d2354da1e3c291722dc57486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize WebformOptionsListBuilder object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'initialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f74663bd4879c05a1183b6ca4753f82c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0915804dd6d626b5f3c6e1d0bde065f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the filter form.
   *
   * @return array
   *   A render array representing the filter form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildFilterForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33576fda3121d40b743fdde2c4e816f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build information summary.
   *
   * @return array
   *   A render array representing the information summary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b26d3c712ceb008535bb266f2a09d40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '575b133630ada1d6d1a377a59e1eb99c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c466d7f466b46bd68cf3ee0f8af1a29f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformOptionsInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6078a6ef09f75c288b27fb996e2ee19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'getDefaultOperations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10cb9bde2d829eb63ff41a40f70ea810' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build list of webforms and composite elements that the webform options is used by.
   *
   * @param \\Drupal\\webform\\WebformOptionsInterface $webform_options
   *   A webform options entity.
   *
   * @return array
   *   Table data containing list of webforms and composite elements that the
   *   webform options is used by.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildUsedBy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f0ef8894a5f5121ce49488fae4f10e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build list of webform options.
   *
   * @param \\Drupal\\webform\\WebformOptionsInterface $webform_options
   *   A webform options entity.
   *
   * @return string
   *   Semi-colon delimited list of webform options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b99049505ea0958467e9b77a69f9c82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'buildOperations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cb1d9edf8859c9b36baa7a9b32ad7dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the base entity query filtered by search and category.
   *
   * @param string $keys
   *   (optional) Search key.
   * @param string $category
   *   (optional) Category.
   *
   * @return \\Drupal\\Core\\Entity\\Query\\QueryInterface
   *   An entity query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'getQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5ff44f1ae4b0a939b7a6102b20ae18f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitylistbuilder' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityListBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'url' => 'Drupal\\Core\\Url',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformentitylistbuildersortlabeltrait' => 'Drupal\\webform\\EntityListBuilder\\WebformEntityListBuilderSortLabelTrait',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsListBuilder',
         'functionName' => 'getEntityIds',
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
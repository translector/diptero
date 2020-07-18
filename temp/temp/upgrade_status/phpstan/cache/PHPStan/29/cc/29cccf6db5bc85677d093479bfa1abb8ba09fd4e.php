<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/views/src/Plugin/views/field/BulkForm.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Routing/RedirectDestinationTrait.php-1594234425,/var/www/html/web/core/modules/views/src/Plugin/views/field/UncacheableFieldHandlerTrait.php-1594234425,/var/www/html/web/core/modules/views/src/Entity/Render/EntityTranslationRenderTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1594234425',
   'data' => 
  array (
    '32affefcdfef9283b9bef19fdebf18ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a actions-based bulk operation form element.
 *
 * @ViewsField("bulk_form")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c27d9b6b9f222da52b2cd7ca9ae24103' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the Redirect Destination.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '224ac005bcd3c940c31b5571cb11e0bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The redirect destination service.
   *
   * @var \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c12f8eede27212edb82a53241e1574d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a \'destination\' URL query parameter for use with \\Drupal\\Core\\Url.
   *
   * @see \\Drupal\\Core\\Routing\\RedirectDestinationInterface::getAsArray()
   *
   * @return array
   *   An associative array containing the key:
   *   - destination: The value of the current request\'s \'destination\' query
   *     parameter, if present. This can be either a relative or absolute URL.
   *     However, for security, redirection to external URLs is not performed.
   *     If the query parameter isn\'t present, then the URL of the current
   *     request is returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getDestinationArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '146a29e72b333870d2e50d8d6cd39da8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the redirect destination service.
   *
   * @return \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   *   The redirect destination helper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getRedirectDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08407cd1b12bd7dfe4ffa227298595c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect destination service.
   *
   * @param \\Drupal\\Core\\Routing\\RedirectDestinationInterface $redirect_destination
   *   The redirect destination service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'setRedirectDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e4878ef4f0aa31ca40adca74bf4b4d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait encapsulating the logic for uncacheable field handlers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '500e651d27c721de413df938bd07f6b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldHandlerInterface::render()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f53e18c65f900962a754050cd3cf2337' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldHandlerInterface::postRender()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'postRender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '101265aff2c39aecb5ab7b19a75070da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldPluginBase::getFieldTokenPlaceholder()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getFieldTokenPlaceholder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bb70820b78d6b40429951dc5595f94b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Actually renders the field markup.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   A result row.
   *
   * @return string
   *   The field markup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'doRender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65f0ad95564d60e3a35a2a011b73406b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldHandlerInterface::getValue()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f1b212f5953d054691ef2d7b39ca6cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait used to instantiate the view\'s entity translation renderer.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92fa14f9514debeb28e839d46ef3aeb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer to be used to render the entity row.
   *
   * @var \\Drupal\\views\\Entity\\Render\\EntityTranslationRendererBase
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e188cea002e32938983572d3c8f21c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current renderer.
   *
   * @return \\Drupal\\views\\Entity\\Render\\EntityTranslationRendererBase
   *   The configured renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityTranslationRenderer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'beb11374fea37aa14b026892d58a723a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity translation matching the configured row language.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity object the field value being processed is attached to.
   * @param \\Drupal\\views\\ResultRow $row
   *   The result row the field value being processed belongs to.
   *
   * @return \\Drupal\\Core\\Entity\\FieldableEntityInterface
   *   The entity translation object for the specified row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9ce1d45356900017edc1535f8150927' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity type identifier.
   *
   * @return string
   *   The entity type identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88424e97d0a3270e2f98bbf732a1239b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity type manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityTypeManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0de73c004aead32bb32bdfb415985a1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity repository.
   *
   * @return \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   *   The entity repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityRepository',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3c1ab42c10105fa18bb16498c95db27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language manager.
   *
   * @return \\Drupal\\Core\\Language\\LanguageManagerInterface
   *   The language manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getLanguageManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db0f2a3b487f34772093c2a9dcee01f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the top object of a view.
   *
   * @return \\Drupal\\views\\ViewExecutable
   *   The view object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getView',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f921df6f34d4bdec84fa55f9f696456f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a standard way to announce deprecated properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd36a38070b3ee1c994560b15eb991f8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alows to access deprecated/removed properties.
   *
   * This method must be public.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => '__get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '704c685e33356533e25c86411babb611' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b5a7a90789786bc7962d0c3febd5d55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e42e36f00e2d84b04be31c624f705096' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52cfd5c6aff232b44e0ee8a28d9d56d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The action storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a31eb64597dc46e87ba2b9f7d0ea195f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of actions that can be executed.
   *
   * @var \\Drupal\\system\\ActionConfigEntityInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f508f6aaa379b51262f50196b1233320' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb42d6c1fce2ccdff53b9e5ea966f44e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5edd16f21d5683463cc220e3e8a80c5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new BulkForm object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c121c9b9e464c1a4b926ef55627ce28c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c755ff7fa7c18f9b2db742daeb2ac84b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'init',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63c76c58ef38e242172e8d1749b6caff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '075fbe5661317e157a4da12d55b3c396' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08b75f541f4479c355458a0ed3cba8d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f06e4c116e4b6c153784ad5e7f11677' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa2ce07c7b60c5b70266702addb12fa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c719b77c3dd764b42bde9dfe772914c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityTypeManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d9bc2557a0b8afbb456110470a74ee2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getEntityRepository',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6543dc9157c6096582957fdc602e196' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getLanguageManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a29a1f22437591ed8001960772a9b758' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getView',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd89f3d32084a079cb002d7881b2d04f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'defineOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9961ec451ba6be2c446aba31fb70ba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'buildOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da7eb0e539e1291df5d1602d0ccbaff2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'validateOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95d410567a1710d42d228ade66740164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'preRender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a19c40022788e0b8e1e4f2d79b497e59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27216008b74097c1d9a6b697540487c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form constructor for the bulk form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'viewsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6f579b95633803dc807f408714ab252' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the available operations for this form.
   *
   * @param bool $filtered
   *   (optional) Whether to filter actions to selected actions.
   *
   * @return array
   *   An associative array of operations, suitable for a select element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'getBulkOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb6ffec8b68796bdfea284b8ffc8ff0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit handler for the bulk form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @throws \\Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException
   *   Thrown when the user tried to access an action without access to it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'viewsFormSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7251d431c76ad85a6a6fcd7f372de502' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the message to be displayed when there are no selected items.
   *
   * @return string
   *   Message displayed when no items are selected.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'emptySelectedMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af6c17ee24fa2177ab767d0eb1a21a7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'viewsFormValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0747e27e8faf84cf529ee948aa7133c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'query',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05d0b4598563f914b70aa868e47effc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'clickSortable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec3a217735758d73e0dc1c1d68b97ac0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates a bulk form key.
   *
   * This generates a key that is used as the checkbox return value when
   * submitting a bulk form. This key allows the entity for the row to be loaded
   * totally independent of the executed view row.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to calculate a bulk form key for.
   * @param bool $use_revision
   *   Whether the revision id should be added to the bulk form key. This should
   *   be set to TRUE only if the view is listing entity revisions.
   *
   * @return string
   *   The bulk form key representing the entity\'s id, language and revision (if
   *   applicable) as one string.
   *
   * @see self::loadEntityFromBulkFormKey()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'calculateEntityBulkFormKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ef8629db3eded55ecc9e5c5e7fe24c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads an entity based on a bulk form key.
   *
   * @param string $bulk_form_key
   *   The bulk form key representing the entity\'s id, language and revision (if
   *   applicable) as one string.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The entity loaded in the state (language, optionally revision) specified
   *   as part of the bulk form key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'revisionableinterface' => 'Drupal\\Core\\Entity\\RevisionableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'table' => 'Drupal\\views\\Plugin\\views\\style\\Table',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\BulkForm',
         'functionName' => 'loadEntityFromBulkFormKey',
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
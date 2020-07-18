<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/path_alias/src/AliasRepositoryInterface.php-1594234425',
   'data' => 
  array (
    'fcd0536e909729947b8d441149433a5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for path alias lookup operations.
 *
 * The path alias repository service is only used internally in order to
 * optimize alias lookup queries needed in the critical path of each request.
 * However, it is not marked as an internal service because alternative storage
 * backends still need to override it if they provide a different storage class
 * for the PathAlias entity type.
 *
 * Whenever you need to determine whether an alias exists for a system path, or
 * whether a system path has an alias, the \'path_alias.manager\' service should
 * be used instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\path_alias',
         'uses' => 
        array (
          'corealiasrepositoryinterface' => 'Drupal\\Core\\Path\\AliasRepositoryInterface',
        ),
         'className' => 'Drupal\\path_alias\\AliasRepositoryInterface',
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
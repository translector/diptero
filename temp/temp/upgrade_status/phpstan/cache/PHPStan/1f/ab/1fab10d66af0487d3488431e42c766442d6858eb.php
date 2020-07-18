<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/node/src/NodeStorageInterface.php-1594234425',
   'data' => 
  array (
    '3da9a1b14a2874bb385f60cdd40cb70c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for node entity storage classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\node',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\node\\NodeStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67f31f1a838b66d8843828756982cc85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of node revision IDs for a specific node.
   *
   * @param \\Drupal\\node\\NodeInterface $node
   *   The node entity.
   *
   * @return int[]
   *   Node revision IDs (in ascending order).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\node',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\node\\NodeStorageInterface',
         'functionName' => 'revisionIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4428600b6345437d935035f3c747082d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of revision IDs having a given user as node author.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Node revision IDs (in ascending order).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\node',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\node\\NodeStorageInterface',
         'functionName' => 'userRevisionIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a28cf3ec94c8df91602068ef5781f26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts the number of revisions in the default language.
   *
   * @param \\Drupal\\node\\NodeInterface $node
   *   The node entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\node',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\node\\NodeStorageInterface',
         'functionName' => 'countDefaultLanguageRevisions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '700f9fa072fddfc5abe450a9fa838af8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates all nodes of one type to be of another type.
   *
   * @param string $old_type
   *   The current node type of the nodes.
   * @param string $new_type
   *   The new node type of the nodes.
   *
   * @return int
   *   The number of nodes whose node type field was modified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\node',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\node\\NodeStorageInterface',
         'functionName' => 'updateType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f36b1d383182da07c4473a55761bb674' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets the language for all nodes with the given language.
   *
   * @param \\Drupal\\Core\\Language\\LanguageInterface $language
   *   The language object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\node',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\node\\NodeStorageInterface',
         'functionName' => 'clearRevisionsLanguage',
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
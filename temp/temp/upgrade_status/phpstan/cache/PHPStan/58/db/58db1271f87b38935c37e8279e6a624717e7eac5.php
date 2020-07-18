<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/includes/webform.query.inc-1594241402',
   'data' => 
  array (
    '813508d06f52850022606c2e0cd41f6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_query_TAG_alter().
 *
 * Append EAV sort to webform_submission entity query.
 *
 * @see http://stackoverflow.com/questions/12893314/sorting-eav-database
 * @see \\Drupal\\webform\\WebformSubmissionListBuilder::getEntityIds
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_list_builder_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17037b8648b065264cb9eaaeade7c1a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Database\\Query\\SelectInterface $query */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_list_builder_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abc9bcfd213eff051597c024b0f14ca0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_query_TAG_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_entity_reference_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '127ab6f0c0e8dead2405508c46c36d87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_entity_reference_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbcf4c03e84568d4189d2d3367689580' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_query_TAG_alter().
 *
 * This hook implementation adds webform submission access checks for the
 * account stored in the \'account\' meta-data (or current user if not provided),
 * for an operation stored in the \'op\' meta-data (or \'view\' if not provided).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_access_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17e9bbf877cacc01c9fe46afcf474f75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Database\\Query\\SelectInterface $query */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_access_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd45054dd0df013875ab054215f9f8c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_access_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdc129659174875b9ec78f30ac4c2578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionStorageInterface $submission_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_access_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1ae8ca79901bf0311584c79315ad841' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformAccessRulesManagerInterface $access_rules_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => NULL,
         'functionName' => 'webform_query_webform_submission_access_alter',
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
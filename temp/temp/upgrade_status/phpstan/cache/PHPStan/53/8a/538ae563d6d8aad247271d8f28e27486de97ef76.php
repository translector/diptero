<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsLastEntityQueryTrait.php-1590060906',
   'data' => 
  array (
    '5e42f05af63269f27dcd0afd0bc68385' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test trait providing helpers to query latest entities created.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a02fe96bcb4e86ead758a5ab46d0564' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the latest entity created of a given type.
   *
   * Will fail the test if there is no entity of that type.
   *
   * @param string $entity_type_id
   *   The storage name of the entity.
   * @param bool $load
   *   (optional) Whether or not the return thould be the loaded entity.
   *   Defaults to FALSE.
   *
   * @return mixed
   *   The ID of the latest created entity of that type. If $load is TRUE, will
   *   use ::loadUnchanged() to get a fresh version of the entity object and
   *   return it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
         'functionName' => 'getLastEntityOfType',
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
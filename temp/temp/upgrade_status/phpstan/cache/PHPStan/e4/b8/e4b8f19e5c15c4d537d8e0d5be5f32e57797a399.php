<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Plugin/migrate/source/d7/ParagraphsType.php-1590060906',
   'data' => 
  array (
    'a8f5d3f61df53cca1dfd710599a45c90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Paragraphs Type source plugin.
 *
 * Available configuration keys:
 * - add_description: (bool) (optional) If enabled this will add a default
 *   description to the source data. default:FALSE.
 *
 * @MigrateSource(
 *   id = "d7_paragraphs_type",
 *   source_module = "paragraphs"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a99ffb6fc3ab26c61c2d0a100ab6826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05267be471d9c720da92867b6172ebdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => 'query',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '535dbc0766e300041bc1471d0efd880d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => 'prepareRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd899fa2750f5a1603da8480459ec531' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => 'fields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41a633a08134229bb18c34953a7054a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => 'getIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bce05ba981c3a53b77db5ce8822ddd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated addDescription configuration key is deprecated in 8.x-1.0 and
   * will be removed prior to 9.x.  Use add_description instead.
   *
   * @see https://www.drupal.org/project/paragraphs/issues/2911242
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'row' => 'Drupal\\migrate\\Row',
          'drupalsqlbase' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\source\\d7\\ParagraphsType',
         'functionName' => 'setConfiguration',
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
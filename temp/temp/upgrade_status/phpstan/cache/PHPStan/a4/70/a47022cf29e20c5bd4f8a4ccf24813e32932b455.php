<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/Query/QueryAggregateInterface.php-1594234425',
   'data' => 
  array (
    '258e4564d3a087ea96f3ebe489dd33f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a interface for aggregated entity queries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd80b55bca39ce26ff73fb1dd99d8821c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies a field and a function to aggregate on.
   *
   * Available functions: SUM, AVG, MIN, MAX and COUNT.
   *
   * @todo What about GROUP_CONCAT support?
   *
   * @param string $field
   *   The name of the field to aggregate by.
   * @param string $function
   *   The aggregation function, for example COUNT or MIN.
   * @param string $langcode
   *   (optional) The language code.
   * @param string $alias
   *   (optional) The key that will be used on the resultset.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'aggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b64361fd886e66ab2f6dcbacb62a165a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies the field to group on.
   *
   * @param string $field
   *   The name of the field to group by.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'groupBy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '386ef4d841f0db3ab69360607c5b3991' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition for an aggregated value.
   *
   * @param string $field
   *   The name of the field to aggregate by.
   * @param string $function
   *   The aggregation function, for example COUNT or MIN.
   * @param mixed $value
   *   The actual value of the field.
   * @param $operator
   *   Possible values:
   *   - \'=\', \'<>\', \'>\', \'>=\', \'<\', \'<=\', \'STARTS_WITH\', \'CONTAINS\',
   *     \'ENDS_WITH\': These operators expect $value to be a literal of the
   *     same type as the column.
   *   - \'IN\', \'NOT IN\': These operators expect $value to be an array of
   *     literals of the same type as the column.
   *   - \'BETWEEN\': This operator expects $value to be an array of two literals
   *     of the same type as the column.
   * @param string $langcode
   *   (optional) The language code.
   *
   * @return $this
   *   The called object.
   *
   * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::condition()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'conditionAggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39abed0b3b079598017941526284adb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries for the existence of a field.
   *
   * @param string $field
   *   The name of the field.
   * @param string $function
   *   The aggregate function.
   * @param $langcode
   *   (optional) The language code.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'existsAggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6df70cefb0a5857157209a1bed5603b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries for the nonexistence of a field.
   *
   * @param string $field
   *   The name of a field.
   * @param string $function
   *   The aggregate function.
   * @param string $langcode
   *   (optional) The language code.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'notExistsAggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29f05dc6361d2aee2c5290c461440f8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an object holding a group of conditions.
   *
   * See andConditionAggregateGroup() and orConditionAggregateGroup() for more.
   *
   * @param string $conjunction
   *   - AND (default): this is the equivalent of andConditionAggregateGroup().
   *   - OR: this is the equivalent of andConditionAggregateGroup().
   *
   * @return ConditionInterface
   *   An object holding a group of conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'conditionAggregateGroupFactory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bd5397bf55517a068c17cfa8d76e618' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sorts by an aggregated value.
   *
   * @param string $field
   *   The name of a field.
   * @param string $function
   *   The aggregate function. This is only marked optional for interface
   *   compatibility, it is illegal to leave it out.
   * @param string $direction
   *   The order of sorting, either DESC for descending of ASC for ascending.
   * @param string $langcode
   *   (optional) The language code.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'sortAggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd99a3e59cebbf1f3d5fd859f996d40e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes the aggregate query.
   *
   * @return array
   *   A list of result row arrays. Each result row contains the aggregate
   *   results as keys and also the groupBy columns as keys:
   * @code
   * $result = $query
   *   ->aggregate(\'nid\', \'count\')
   *   ->condition(\'status\', 1)
   *   ->groupby(\'type\')
   *   ->executeAggregate();
   * @endcode
   * Will return:
   * @code
   * $result[0] = array(\'count_nid\' => 3, \'type\' => \'page\');
   * $result[1] = array(\'count_nid\' => 1, \'type\' => \'poll\');
   * $result[2] = array(\'count_nid\' => 4, \'type\' => \'story\');
   * @endcode
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryAggregateInterface',
         'functionName' => 'execute',
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
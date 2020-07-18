<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Validation/Plugin/Validation/Constraint/NotNullConstraint.php-1594234425',
   'data' => 
  array (
    '211bcb1298b16ac1c972208de2382b66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * NotNull constraint.
 *
 * Overrides the symfony constraint to handle empty Typed Data structures.
 *
 * @Constraint(
 *   id = "NotNull",
 *   label = @Translation("NotNull", context = "Validation"),
 *   type = false
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'notnull' => 'Symfony\\Component\\Validator\\Constraints\\NotNull',
        ),
         'className' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
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
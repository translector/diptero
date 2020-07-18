<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Utility/Mail.php-1594234425',
   'data' => 
  array (
    '4289d3ca6995f96d39950822dc3fddd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helpers to ensure emails are compliant with RFCs.
 *
 * @ingroup utility
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Mail',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1ff28c41a180d07bb04ddde3a6e76c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * RFC-2822 "specials" characters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Mail',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46b092adde72f09fbb7634f96e583bcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return a RFC-2822 compliant "display-name" component.
   *
   * The "display-name" component is used in mail header "Originator" fields
   * (From, Sender, Reply-to) to give a human-friendly description of the
   * address, i.e. From: My Display Name <xyz@example.org>. RFC-822 and
   * RFC-2822 define its syntax and rules. This method gets as input a string
   * to be used as "display-name" and formats it to be RFC compliant.
   *
   * @param string $string
   *   A string to be used as "display-name".
   *
   * @return string
   *   A RFC compliant version of the string, ready to be used as
   *   "display-name" in mail originator header fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Mail',
         'functionName' => 'formatDisplayName',
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
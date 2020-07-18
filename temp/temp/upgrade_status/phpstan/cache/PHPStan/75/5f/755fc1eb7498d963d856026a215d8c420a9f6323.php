<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/yaml/Yaml.php-1589183514',
   'data' => 
  array (
    '8f18e958b5b798a87c7591dedb7e7c3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Yaml offers convenience methods to load and dump YAML.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since version 3.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Yaml',
         'uses' => 
        array (
          'parseexception' => 'Symfony\\Component\\Yaml\\Exception\\ParseException',
        ),
         'className' => 'Symfony\\Component\\Yaml\\Yaml',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90c2a62275240b982327bd868a6e5df3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated since version 3.4, to be removed in 4.0. Quote your evaluable keys instead.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Yaml',
         'uses' => 
        array (
          'parseexception' => 'Symfony\\Component\\Yaml\\Exception\\ParseException',
        ),
         'className' => 'Symfony\\Component\\Yaml\\Yaml',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1734f7a4d4586853e6f0ae3883746dc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parses a YAML file into a PHP value.
     *
     * Usage:
     *
     *     $array = Yaml::parseFile(\'config.yml\');
     *     print_r($array);
     *
     * @param string $filename The path to the YAML file to be parsed
     * @param int    $flags    A bit field of PARSE_* constants to customize the YAML parser behavior
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws ParseException If the file could not be read or the YAML is not valid
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Yaml',
         'uses' => 
        array (
          'parseexception' => 'Symfony\\Component\\Yaml\\Exception\\ParseException',
        ),
         'className' => 'Symfony\\Component\\Yaml\\Yaml',
         'functionName' => 'parseFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6fec1ce36ef201ab933978894b86291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parses YAML into a PHP value.
     *
     *  Usage:
     *  <code>
     *   $array = Yaml::parse(file_get_contents(\'config.yml\'));
     *   print_r($array);
     *  </code>
     *
     * @param string $input A string containing YAML
     * @param int    $flags A bit field of PARSE_* constants to customize the YAML parser behavior
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws ParseException If the YAML is not valid
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Yaml',
         'uses' => 
        array (
          'parseexception' => 'Symfony\\Component\\Yaml\\Exception\\ParseException',
        ),
         'className' => 'Symfony\\Component\\Yaml\\Yaml',
         'functionName' => 'parse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e07995894933c63862697b02dbd3d39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dumps a PHP value to a YAML string.
     *
     * The dump method, when supplied with an array, will do its best
     * to convert the array into friendly YAML.
     *
     * @param mixed $input  The PHP value
     * @param int   $inline The level where you switch to inline YAML
     * @param int   $indent The amount of spaces to use for indentation of nested nodes
     * @param int   $flags  A bit field of DUMP_* constants to customize the dumped YAML string
     *
     * @return string A YAML string representing the original PHP value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Yaml',
         'uses' => 
        array (
          'parseexception' => 'Symfony\\Component\\Yaml\\Exception\\ParseException',
        ),
         'className' => 'Symfony\\Component\\Yaml\\Yaml',
         'functionName' => 'dump',
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
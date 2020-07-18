<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/serializer/Encoder/DecoderInterface.php-1590865085',
   'data' => 
  array (
    '1842c1509c6f7e4e5dd14333a6ea97d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface of decoders.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Encoder',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff9a6bdeecd02540c8414380e4b7bdcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Decodes a string into PHP data.
     *
     * @param string $data    Data to decode
     * @param string $format  Format name
     * @param array  $context Options that decoders have access to
     *
     * The format parameter specifies which format the data is in; valid values
     * depend on the specific implementation. Authors implementing this interface
     * are encouraged to document which formats they support in a non-inherited
     * phpdoc comment.
     *
     * @return mixed
     *
     * @throws UnexpectedValueException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Encoder',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
         'functionName' => 'decode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '827a3f448a68e92973c3b596e26033d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the deserializer can decode from given format.
     *
     * @param string $format Format name
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Encoder',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
         'functionName' => 'supportsDecoding',
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
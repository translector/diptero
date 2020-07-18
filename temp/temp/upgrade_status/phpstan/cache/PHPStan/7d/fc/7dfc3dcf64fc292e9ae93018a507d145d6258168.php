<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/serializer/Encoder/EncoderInterface.php-1590865085',
   'data' => 
  array (
    '7d7eac976693248a1d90f2c27d5d316f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface of encoders.
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
         'className' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2488ea56b88cbea4f4a65d5065445797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Encodes data into the given format.
     *
     * @param mixed  $data    Data to encode
     * @param string $format  Format name
     * @param array  $context Options that normalizers/encoders have access to
     *
     * @return string|int|float|bool
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
         'className' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
         'functionName' => 'encode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58b1e34c68cea093cd4a0ac413f62c67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the serializer can encode to given format.
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
         'className' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
         'functionName' => 'supportsEncoding',
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
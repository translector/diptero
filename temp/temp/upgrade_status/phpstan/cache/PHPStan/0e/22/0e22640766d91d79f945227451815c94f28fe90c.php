<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php-1590865085',
   'data' => 
  array (
    '3498afe39025de3fb89febd3ffa9e8a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface of denormalizers.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Normalizer',
         'uses' => 
        array (
          'badmethodcallexception' => 'Symfony\\Component\\Serializer\\Exception\\BadMethodCallException',
          'exceptioninterface' => 'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface',
          'extraattributesexception' => 'Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\Serializer\\Exception\\RuntimeException',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '747aa932dfc4e368db6f088103e10c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed  $data    Data to restore
     * @param string $type    The expected class to instantiate
     * @param string $format  Format the given data was extracted from
     * @param array  $context Options available to the denormalizer
     *
     * @return object|array
     *
     * @throws BadMethodCallException   Occurs when the normalizer is not called in an expected context
     * @throws InvalidArgumentException Occurs when the arguments are not coherent or not supported
     * @throws UnexpectedValueException Occurs when the item cannot be hydrated with the given data
     * @throws ExtraAttributesException Occurs when the item doesn\'t have attribute to receive given data
     * @throws LogicException           Occurs when the normalizer is not supposed to denormalize
     * @throws RuntimeException         Occurs if the class cannot be instantiated
     * @throws ExceptionInterface       Occurs for all the other cases of errors
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Normalizer',
         'uses' => 
        array (
          'badmethodcallexception' => 'Symfony\\Component\\Serializer\\Exception\\BadMethodCallException',
          'exceptioninterface' => 'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface',
          'extraattributesexception' => 'Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\Serializer\\Exception\\RuntimeException',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
         'functionName' => 'denormalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bc4414d10772c96a6adb34e1bd0ad73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the given class is supported for denormalization by this normalizer.
     *
     * @param mixed  $data   Data to denormalize from
     * @param string $type   The class to which the data should be denormalized
     * @param string $format The format being deserialized from
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Normalizer',
         'uses' => 
        array (
          'badmethodcallexception' => 'Symfony\\Component\\Serializer\\Exception\\BadMethodCallException',
          'exceptioninterface' => 'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface',
          'extraattributesexception' => 'Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'runtimeexception' => 'Symfony\\Component\\Serializer\\Exception\\RuntimeException',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
         'functionName' => 'supportsDenormalization',
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
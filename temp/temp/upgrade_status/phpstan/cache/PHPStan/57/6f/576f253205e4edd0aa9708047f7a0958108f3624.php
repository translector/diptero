<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/serializer/Serializer.php-1590865085',
   'data' => 
  array (
    '1a580c32e5f58c149f19f8b322351546' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Serializer serializes and deserializes data.
 *
 * objects are turned into arrays by normalizers.
 * arrays are turned into various output formats by encoders.
 *
 *     $serializer->serialize($obj, \'xml\')
 *     $serializer->decode($data, \'xml\')
 *     $serializer->denormalize($data, \'Class\', \'xml\')
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1eaf588a9bdc78894fc7d0f9d5352225' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Encoder\\ChainEncoder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ef82c7c5faa3ad61c7faa593df38e64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Encoder\\ChainDecoder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71997cfdb687c4770aa6003d7e107280' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90a57aa8a1b1da9199eb83a92d49e131' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array
     *
     * @deprecated since 3.1 will be removed in 4.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd47455122e57c614a6b58ad3f01cfff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'serialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02f12a922e73fb0fddc25f81133a5832' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'deserialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85d269fb90861d46fddb41097292f8e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'normalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b27cbbe67d4b3385c397b86284066e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'denormalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '866abee4429694f05c7dcbb34b107f7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'supportsNormalization',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d9dcd50265f2d433813a3435557e0b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'supportsDenormalization',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd402af362c493a36cac984e414f18b47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matching normalizer.
     *
     * @param mixed  $data    Data to get the serializer for
     * @param string $format  Format name, present to give the option to normalizers to act differently based on formats
     * @param array  $context Options available to the normalizer
     *
     * @return NormalizerInterface|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'getNormalizer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1607f1b3e7384bc75b572e17bb0a20ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a matching denormalizer.
     *
     * @param mixed  $data    Data to restore
     * @param string $class   The expected class to instantiate
     * @param string $format  Format name, present to give the option to normalizers to act differently based on formats
     * @param array  $context Options available to the denormalizer
     *
     * @return DenormalizerInterface|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'getDenormalizer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '887c9e44d2ff926927560d8c5782c440' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'encode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '017b5488fd47b943ab1c416517a42ead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'decode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5a4693216af6ead6a2848fdff0f268e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
         'functionName' => 'supportsEncoding',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e7a8034aec0b1d237a3e92f431414ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer',
         'uses' => 
        array (
          'chaindecoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder',
          'chainencoder' => 'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder',
          'decoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface',
          'encoderinterface' => 'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
          'notencodablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException',
          'notnormalizablevalueexception' => 'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException',
          'denormalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface',
          'denormalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface',
          'normalizerawareinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface',
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Serializer',
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
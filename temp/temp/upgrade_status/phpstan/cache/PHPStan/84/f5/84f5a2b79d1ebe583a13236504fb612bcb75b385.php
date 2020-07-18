<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/focal_point/tests/src/Unit/Effects/FocalPointEffectsTest.php-1586383018',
   'data' => 
  array (
    '968aba06ca48c88e9fcb0467c81f1f46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the Focal Point image effects.
 *
 * @group Focal Point
 *
 * @coversDefaultClass \\Drupal\\focal_point\\FocalPointEffectBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd81947bfe794ffb5469e7cbd0304d0a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b3f590cefc1a34ee218b9d662c99cc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the construct method.
   *
   * @covers ::__construct
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testEffectConstructor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec60988d2982c0cb3258aacbf24e884b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the resize calculation.
   *
   * @covers ::calculateResizeData
   *
   * @dataProvider calculateResizeDataProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testCalculateResizeData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0bdfa37ff63d8d67549d38a1f8a279c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testCalculateResizeData().
   *
   * @see FocalPointEffectsTest::testCalculateResizeData()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'calculateResizeDataProvider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '422b94b96fae89ffe1ef4cceeaf6960b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the getting and setting of the original image size.
   *
   * @covers ::setOriginalImageSize
   * @covers ::getOriginalImageSize
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testSetGetOriginalImageSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5889657ff172b35b8a7e47ca5429695c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the focal point transformation.
   *
   * @covers ::transformFocalPoint
   *
   * @dataProvider transformFocalPointProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testTransformFocalPoint',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2f407eaac9ab71a54ac34416eb61148' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testTransformFocalPoint().
   *
   * @see FocalPointEffectsTest::testTransformFocalPoint()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'transformFocalPointProvider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bc6ada6e3492e4bb9e3bbf678089376' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test getting the original focal point.
   *
   * @covers ::getOriginalFocalPoint
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testGetOriginalFocalPoint',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c794c092d90cceaa9248e440647d60aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test constrain logic.
   *
   * @covers ::constrainCropArea
   *
   * @dataProvider constrainCropAreaProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testConstrainCropArea',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8d0024c62c2abdc7bec0fbf36dc10a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testConstrainCropArea().
   *
   * @see FocalPointEffectsTest::testConstrainCropArea()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'constrainCropAreaProvider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66cfcde571b3f2f13d355ac37720830d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test calculating the anchor.
   *
   * @covers ::calculateAnchor
   *
   * @dataProvider calculateAnchorProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'testCalculateAnchor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '810cb3664ed82803a1ac5d26c3c887d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testCalculateAnchor().
   *
   * @see FocalPointEffectsTest::testCalculateAnchor()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\FocalPointEffectsTest',
         'functionName' => 'calculateAnchorProvider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b9a84e7620946e12470c6edf59ad8cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Dummy class for testing FocalPointEffectBase.
 *
 * @package Drupal\\Tests\\focal_point\\Unit\\Effects
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\TestFocalPointEffectBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9882f012509c383fda95768b8c49b700' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A focal point string in the form XxY, or null if we\'re not testing preview.
   *
   * @var string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\TestFocalPointEffectBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc3513c687eb609ec9589621e69d0209' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the preview value.
   *
   * @return string|null
   *   A focal point string in the form XxY, or null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\TestFocalPointEffectBase',
         'functionName' => 'getPreviewValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '536d00f139da7db3aab7b33d5eeb79a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the preview value.
   *
   * @param string|null $value
   *   A focal point string in the form XxY, or null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Unit\\Effects',
         'uses' => 
        array (
          'immutableconfig' => 'Drupal\\Core\\Config\\ImmutableConfig',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'cropstorageinterface' => 'Drupal\\crop\\CropStorageInterface',
          'focalpointcropimageeffect' => 'Drupal\\focal_point\\Plugin\\ImageEffect\\FocalPointCropImageEffect',
          'focalpointeffectbase' => 'Drupal\\focal_point\\FocalPointEffectBase',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'focalpointunittestcase' => 'Drupal\\Tests\\focal_point\\Unit\\FocalPointUnitTestCase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Unit\\Effects\\TestFocalPointEffectBase',
         'functionName' => 'setPreviewValue',
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
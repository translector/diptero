<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/tests/src/Kernel/MediaKernelTestBase.php-1594234425,/var/www/html/web/core/modules/media/tests/src/Traits/MediaTypeCreationTrait.php-1594234425',
   'data' => 
  array (
    'b94b5f9c765f0bc519a8244bcf18983b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for Media kernel tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e11d741e0efd09f12be9198fc315b474' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create a media type from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Traits',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec8ae431f2c13eac7928cfe564b829c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a media type for a source plugin.
   *
   * @param string $source_plugin_id
   *   The media source plugin ID.
   * @param mixed[] $values
   *   (optional) Additional values for the media type entity:
   *   - id: The ID of the media type. If none is provided, a random value will
   *     be used.
   *   - label: The human-readable label of the media type. If none is provided,
   *     a random value will be used.
   *   - bundle: (deprecated) The ID of the media type, for backwards
   *     compatibility purposes. Use \'id\' instead.
   *   See \\Drupal\\media\\MediaTypeInterface and \\Drupal\\media\\Entity\\MediaType
   *   for full documentation of the media type properties.
   *
   * @return \\Drupal\\media\\MediaTypeInterface
   *   A media type.
   *
   * @see \\Drupal\\media\\MediaTypeInterface
   * @see \\Drupal\\media\\Entity\\MediaType
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Traits',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => 'createMediaType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88b1d499ee5d501ed4af368052a2e927' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\media\\MediaTypeInterface $media_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Traits',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => 'createMediaType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '171959c55c32017fa6f25c5a5624dfeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to install.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '475b42b9424e382480f5724902f86813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test media type.
   *
   * @var \\Drupal\\media\\MediaTypeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f12c6e64a2c51307a675ca3f4cdabb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test media type with constraints.
   *
   * @var \\Drupal\\media\\MediaTypeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4411e280dcc43bc022ec6c9e5247498' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A user.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ba531d22cfa16de419ff223a0b0496d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ac42a86b6d0eabfdb698ff6aaa350f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper to generate a media item.
   *
   * @param string $filename
   *   String filename with extension.
   * @param \\Drupal\\media\\MediaTypeInterface $media_type
   *   The media type.
   *
   * @return \\Drupal\\media\\Entity\\Media
   *   A media item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Kernel',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'media' => 'Drupal\\media\\Entity\\Media',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'mediatypecreationtrait' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
        ),
         'className' => 'Drupal\\Tests\\media\\Kernel\\MediaKernelTestBase',
         'functionName' => 'generateMedia',
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
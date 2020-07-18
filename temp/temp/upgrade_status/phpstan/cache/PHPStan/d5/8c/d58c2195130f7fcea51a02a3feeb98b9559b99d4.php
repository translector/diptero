<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/tests/src/FunctionalJavascript/LinkitDialogTest.php-1586214306,/var/www/html/web/modules/contrib/linkit/src/Tests/ProfileCreationTrait.php-1586214306',
   'data' => 
  array (
    '67763257807d77ec199358f2e84f398a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the linkit alterations on the drupallink plugin.
 *
 * @group linkit
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd386c6523704e801ed9ffff6c38574d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create profiles based on default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Tests',
         'uses' => 
        array (
          'profile' => 'Drupal\\linkit\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c81079a13cb842bb0b6e5229b9d3bb77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a profile based on default settings.
   *
   * @param array $settings
   *   (optional) An associative array of settings for the profile, as used in
   *   entity_create(). Override the defaults by specifying the key and value
   *   in the array.
   *   The following defaults are provided:
   *   - id: Random string.
   *   - label: Random string.
   *
   * @return \\Drupal\\linkit\\ProfileInterface
   *   The created profile entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Tests',
         'uses' => 
        array (
          'profile' => 'Drupal\\linkit\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'createProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7700b4c00f18b4d20f0bbb08a86bc3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6f3a4af890a86ff70eb97af89f0a69f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c551fcad90796a54cd0d9f557e22296' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An instance of the "CKEditor" text editor plugin.
   *
   * @var \\Drupal\\ckeditor\\Plugin\\Editor\\CKEditor
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebef98cd21e2cf5f7d8572d99652a3e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A linkit profile.
   *
   * @var \\Drupal\\linkit\\ProfileInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '758cf3c0a1059568b14b93ef817efb9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8899110bd75100bc119820753ab37ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\linkit\\MatcherInterface $plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29d0e7e5e33d6c7073aaca633835dc84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the link dialog.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'testLinkDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c0dcb6eea1413c5fc4fe23eff38d437' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'testLinkDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e20d9d1d48c151f1f3f4ac8104a7a32b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a variable is empty.
   *
   * @param string $field_name
   *   The name of the field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'assertEmptyWithJs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a6ffbd188f5cc7009df16effdc4b743' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that two variables are equal.
   *
   * @param string $field_name
   *   The name of the field.
   * @param string $expected
   *   The expected value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'assertEqualsWithJs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c477d0be2aec5d8e989947bd8a6a60a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an attribute of the first link in the ckeditor editor.
   *
   * @param string $attribute
   *   The attribute name.
   *
   * @return string|null
   *   The attribute, or null if the attribute is not found on the element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'entitytestmul' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
        ),
         'className' => 'Drupal\\Tests\\linkit\\FunctionalJavascript\\LinkitDialogTest',
         'functionName' => 'getLinkAttributeFromEditor',
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
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/tests/src/Kernel/LinkitEditorLinkDialogTest.php-1586214306,/var/www/html/web/modules/contrib/linkit/src/Tests/ProfileCreationTrait.php-1586214306',
   'data' => 
  array (
    '5500584dccc1fa92f9a8cba973690fe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests EditorLinkDialog validation and conversion functionality.
 *
 * @group linkit
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a71190711f8d8ab71db74f01a030c2ce' => 
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
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c4463d30737fd05392a3d60023a9740' => 
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
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'createProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '453143b83f5ea664edb7858dcf1b17d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The linkit profile.
   *
   * @var \\Drupal\\linkit\\ProfileInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16ce09ac51f55e714f3a7c1cc68d2348' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Editor for testing.
   *
   * @var \\Drupal\\editor\\EditorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35349854a5ede7c98740615d31c9e18a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3ac775c41208ab26f902fcb04b75a6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up the test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82014b31c584ef143b964d57d581934a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\linkit\\MatcherManager $matcherManager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed443b6287dd546657725b600611ab09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\linkit\\MatcherInterface $plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3bbe2b24880b39ebdb3ef23eaec1cff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests adding a link.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testAdd',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b87b43c2007471a5636c483395b658f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testAdd',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16824d3a0dbf0fe7be64f43e47c26e31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Form\\FormBuilderInterface $form_builder */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testAdd',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7efaedb25d41c8ba5bd2b610d87027e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests editing a link with data attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testEditWithDataAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '928a8116a116a350d036413240532281' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testEditWithDataAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c94f42bb5a72f911bfbe8cf86807c55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Form\\FormBuilderInterface $form_builder */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testEditWithDataAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77752b568e2741a1f925b3f466f67125' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests editing a link without data attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testEditWithoutDataAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6430e547306a7c3156105d27dc81071' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Form\\FormBuilderInterface $form_builder */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
          'editorlinkdialog' => 'Drupal\\editor\\Form\\EditorLinkDialog',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitEditorLinkDialogTest',
         'functionName' => 'testEditWithoutDataAttributes',
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
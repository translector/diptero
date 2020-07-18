<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/modules/paragraphs_library/src/Plugin/Validation/Constraint/ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator.php-1590060906',
   'data' => 
  array (
    '9faa9dfea24de91740fd6820a7f8c641' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Validates that the library does not bypass Paragraphs type restrictions.
 *
 * If a field disallows certain Paragraphs types, this validates that those
 * restrictions are not being circumvented by putting a Paragraphs library item
 * of a disallowed Paragraphs types into a child field.
 *
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4972243dc261dd30f6b9f8f3c8efd06d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The selection plugin manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca79204d85e366f73e6bd1ece11a6690' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77685bda51dfc187612384c5a8b56c4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ValidReferenceConstraintValidator object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface $selection_manager
   *   The selection plugin manager.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '240607b88872eb408e8c58a5ecc3a8f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3ff980fa36cabc3b154a6c6a7ecbe9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d5daa984580e53324c30e7ec769705a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\paragraphs_library\\LibraryItemInterface $library_item_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f89acc883322a2782e27b471ec2e8005' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns paragraph type of the library item.
   *
   * @param string $entity_reference_item
   *  Entity reference item.
   *
   * @return string
   *   Paragraphs type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'selectionpluginmanagerinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'unexpectedtypeexception' => 'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraintValidator',
         'functionName' => 'getParagraphTypeOfLibraryItem',
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
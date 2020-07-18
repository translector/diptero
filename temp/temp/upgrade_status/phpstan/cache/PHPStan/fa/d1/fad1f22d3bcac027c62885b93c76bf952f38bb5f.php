<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/modules/paragraphs_library/src/Plugin/Validation/Constraint/ParagraphsLibraryItemHasAllowedParagraphsTypeConstraint.php-1590060906',
   'data' => 
  array (
    'a1fca63272278ecd0205c70f0bbfb16a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks that the library does not bypass Paragraphs type restrictions.
 *
 * A common usecase is to have a "From library" Paragraphs type with an entity
 * reference field to Paragraphs library items.
 * The Paragraphs type of library item that the "From library" Paragraph
 * references must be allowed in the field that holds "From library" Paragraph,
 * if that field has this constraint.
 *
 * @Constraint(
 *   id = "ParagraphsLibraryItemHasAllowedParagraphsType",
 *   label = @Translation("Paragraphs type of Paragraphs library item\'s root is allowed in the parent field.", context = "Validation"),
 *   type = {"entity"}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraint',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79df487dd2c38e3f716f828e5e0526a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default violation message.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
        ),
         'className' => 'Drupal\\paragraphs_library\\Plugin\\Validation\\Constraint\\ParagraphsLibraryItemHasAllowedParagraphsTypeConstraint',
         'functionName' => NULL,
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
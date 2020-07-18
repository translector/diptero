<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Kernel/CommentTest.php-1586203134,/var/www/html/web/core/modules/comment/src/Tests/CommentTestTrait.php-1594234425',
   'data' => 
  array (
    '7b1b112dc97414a5c04718a2b9cc3c1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests comment tokens.
 *
 * @group token
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'comment' => 'Drupal\\comment\\Entity\\Comment',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\CommentTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e88e1048621a36e179b83858977e7088' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the Comment test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\CommentTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '456e0480f26b5bbc75b051aed22f6d68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the default comment field to an entity.
   *
   * Attaches a comment field named \'comment\' to the given entity type and
   * bundle. Largely replicates the default behavior in Drupal 7 and earlier.
   *
   * @param string $entity_type
   *   The entity type to attach the default comment field to.
   * @param string $bundle
   *   The bundle to attach the default comment field to.
   * @param string $field_name
   *   (optional) Field name to use for the comment field. Defaults to
   *     \'comment\'.
   * @param int $default_value
   *   (optional) Default value, one of CommentItemInterface::HIDDEN,
   *   CommentItemInterface::OPEN, CommentItemInterface::CLOSED. Defaults to
   *   CommentItemInterface::OPEN.
   * @param string $comment_type_id
   *   (optional) ID of comment type to use. Defaults to \'comment\'.
   * @param string $comment_view_mode
   *   (optional) The comment view mode to be used in comment field formatter.
   *   Defaults to \'full\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\CommentTest',
         'functionName' => 'addDefaultCommentField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0d38c7937b129ba0a44d8268006ee25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\CommentTest',
         'functionName' => 'addDefaultCommentField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f355cd0e0b64763a7483865fcb6919a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'comment' => 'Drupal\\comment\\Entity\\Comment',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\CommentTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0c4af458c3e83631a7d1e463f04b825' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'comment' => 'Drupal\\comment\\Entity\\Comment',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\CommentTest',
         'functionName' => 'setUp',
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
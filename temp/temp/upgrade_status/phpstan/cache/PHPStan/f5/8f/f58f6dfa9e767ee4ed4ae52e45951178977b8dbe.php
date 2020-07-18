<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/contact/src/Entity/Message.php-1594234425',
   'data' => 
  array (
    'acbff82f9925e1ba12ff868176215b93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the contact message entity.
 *
 * @ContentEntityType(
 *   id = "contact_message",
 *   label = @Translation("Contact message"),
 *   label_collection = @Translation("Contact messages"),
 *   label_singular = @Translation("contact message"),
 *   label_plural = @Translation("contact messages"),
 *   label_count = @PluralTranslation(
 *     singular = "@count contact message",
 *     plural = "@count contact messages",
 *   ),
 *   bundle_label = @Translation("Contact form"),
 *   handlers = {
 *     "access" = "Drupal\\contact\\ContactMessageAccessControlHandler",
 *     "storage" = "Drupal\\Core\\Entity\\ContentEntityNullStorage",
 *     "view_builder" = "Drupal\\contact\\MessageViewBuilder",
 *     "form" = {
 *       "default" = "Drupal\\contact\\MessageForm"
 *     }
 *   },
 *   admin_permission = "administer contact forms",
 *   entity_keys = {
 *     "bundle" = "contact_form",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode"
 *   },
 *   bundle_entity_type = "contact_form",
 *   field_ui_base_route = "entity.contact_form.edit_form",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bdc0707648dc8437666318d895a8e0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'isPersonal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd63a40b0a3201ce16d5044cf26f6d31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'getContactForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '757560c11f846635e05f2759dd0deb03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'getSenderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db0f90bd3eacc96a80a7a4a12d4b1cba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'setSenderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a11a5a3380b69f9a43ea944e9cedb87e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'getSenderMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7f1e52c18119595ebb9a4d2276840ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'setSenderMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2eeab1c178ef6b53b4411e46263dbd5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'getSubject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6caecf6f5b253508b538dda488273a1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'setSubject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3506e750474bde9ceece5a3e8c42202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'getMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29ee83519c261e01c4c26672116e39ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'setMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce739b2346b0a8239e18b58036a51a59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'copySender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6081d32309ddc16152bfafd6260ae777' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'setCopySender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6eb5b2d860a7b2fe80d61912e1ecb4ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'getPersonalRecipient',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a76400830b8cdc5d8c2f5928c702512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4014afa9eef9243c751133a572e5816d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'messageinterface' => 'Drupal\\contact\\MessageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\contact\\Entity\\Message',
         'functionName' => 'baseFieldDefinitions',
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
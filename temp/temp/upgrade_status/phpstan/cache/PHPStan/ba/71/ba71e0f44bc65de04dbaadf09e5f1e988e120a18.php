<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/contact/src/Entity/ContactForm.php-1594234425',
   'data' => 
  array (
    '485814f38999844266ea352cd18d14fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the contact form entity.
 *
 * @ConfigEntityType(
 *   id = "contact_form",
 *   label = @Translation("Contact form"),
 *   label_collection = @Translation("Contact forms"),
 *   label_singular = @Translation("contact form"),
 *   label_plural = @Translation("contact forms"),
 *   label_count = @PluralTranslation(
 *     singular = "@count contact form",
 *     plural = "@count contact forms",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\contact\\ContactFormAccessControlHandler",
 *     "list_builder" = "Drupal\\contact\\ContactFormListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\contact\\ContactFormEditForm",
 *       "edit" = "Drupal\\contact\\ContactFormEditForm",
 *       "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "form",
 *   admin_permission = "administer contact forms",
 *   bundle_of = "contact_message",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "delete-form" = "/admin/structure/contact/manage/{contact_form}/delete",
 *     "edit-form" = "/admin/structure/contact/manage/{contact_form}",
 *     "collection" = "/admin/structure/contact",
 *     "canonical" = "/contact/{contact_form}",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "recipients",
 *     "reply",
 *     "weight",
 *     "message",
 *     "redirect",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20e1f93d845c069e707b0e36f2391be2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The form ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4b0bb9467a5b92b9fdf21c9ce2b1084' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The human-readable label of the category.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5349c2143bcaa94d9cd8ac09248330b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The message displayed to user on form submission.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a59adf2c39d9575105fc6a2f324f06e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of recipient email addresses.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '348e8219ddd7b19474417e98d6eec540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The path to redirect to on form submission.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ed1145ce774915969c5690f1b83d891' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An auto-reply message.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed8c2c7ad34ec387165b5197e3635647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The weight of the category.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc168d38b2326867246685ed98756ebe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'getMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '864d549c11422506ce0a8fdbce40a97f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'setMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbe95d2fcf6f564dba460c06bb182f36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'getRecipients',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba320af6a02a7b2597468debe9bc993a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'setRecipients',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c7b685f51972337cc87e1e19a449fb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'getRedirectPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8a719445bcd9fb8839af4cf7fb11938' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'getRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '038a484ccb4d3dbc00243e2f37d9f3c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'setRedirectPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7bb5627da739336962b6f218366ff61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'getReply',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cf99bb64888049780a87101cfb977be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'setReply',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf6a45881b3a35548374d51c6845fe7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '601ee7d111e37e85bdae2d05c0946527' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'contactforminterface' => 'Drupal\\contact\\ContactFormInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\contact\\Entity\\ContactForm',
         'functionName' => 'setWeight',
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
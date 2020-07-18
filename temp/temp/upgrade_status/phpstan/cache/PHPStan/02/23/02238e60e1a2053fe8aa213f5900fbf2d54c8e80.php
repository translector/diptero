<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/contact/src/MessageInterface.php-1594234425',
   'data' => 
  array (
    'dc980e7453dc5f6b6e6a36965208faef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a contact message entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc3b1101cb4f7ab107706d8b6ad638d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the form this contact message belongs to.
   *
   * @return \\Drupal\\contact\\ContactFormInterface
   *   The contact form entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'getContactForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1723d4f84bc8568e8947a1ea78567636' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of the sender.
   *
   * @return string
   *   The name of the message sender.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'getSenderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '230b5a01856842610737298165dcbe6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the name of the message sender.
   *
   * @param string $sender_name
   *   The name of the message sender.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'setSenderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f60ce0fc7e4bfad5bd076a755f38a3d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the email address of the sender.
   *
   * @return string
   *   The email address of the message sender.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'getSenderMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddd766937fed0247c8de2addb9b06070' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the email address of the sender.
   *
   * @param string $sender_mail
   *   The email address of the message sender.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'setSenderMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c4e7a09c19d9b3a944a7619eee20e5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the message subject.
   *
   * @return string
   *   The message subject.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'getSubject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64ffd4d6e90b0500c13da31ea831ef59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the subject for the email.
   *
   * @param string $subject
   *   The message subject.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'setSubject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fe2d642748dd57ce42b1a76da78d0dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the message body.
   *
   * @return string
   *   The message body.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'getMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4d8559df9106d8e0b8cd5812f32991e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the email message to send.
   *
   * @param string $message
   *   The message body.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'setMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0d0a537ec682beffa913ee4ae8b437e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if a copy should be sent to the sender.
   *
   * @return bool
   *   TRUE if a copy should be sent, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'copySender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b444316304ea910d2433572e4faae86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets if the sender should receive a copy of this email or not.
   *
   * @param bool $inform
   *   TRUE if a copy should be sent, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'setCopySender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ed3d80d26825f288ab678e42a85afaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if this is the personal contact form.
   *
   * @return bool
   *   TRUE if the message bundle is personal.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'isPersonal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb974cbd93512328f023ea18fc2624f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the user this message is being sent to.
   *
   * @return \\Drupal\\user\\UserInterface
   *   The user entity of the recipient, NULL if this is not a personal message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\contact',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\contact\\MessageInterface',
         'functionName' => 'getPersonalRecipient',
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
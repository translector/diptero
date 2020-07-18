<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Mail/MailInterface.php-1594234425',
   'data' => 
  array (
    'cddf123d8b1462b0f4e1187bc1378ed6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for pluggable mail back-ends.
 *
 * @see \\Drupal\\Core\\Annotation\\Mail
 * @see \\Drupal\\Core\\Mail\\MailManager
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Mail\\MailInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d6cc44f71f82fb8793b6d52d55731ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a message prior to sending.
   *
   * Allows to preprocess, format, and postprocess a mail message before it is
   * passed to the sending system. By default, all messages may contain HTML and
   * are converted to plain-text by the Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail
   * implementation. For example, an alternative implementation could override
   * the default implementation and also sanitize the HTML for usage in a MIME-
   * encoded email, but still invoking the Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail
   * implementation to generate an alternate plain-text version for sending.
   *
   * @param array $message
   *   A message array, as described in hook_mail_alter().
   *
   * @return array
   *   The formatted $message.
   *
   * @see \\Drupal\\Core\\Mail\\MailManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Mail\\MailInterface',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65ed8393d01a6208aa7faef215bf0c93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sends a message composed by \\Drupal\\Core\\Mail\\MailManagerInterface->mail().
   *
   * @param array $message
   *   Message array with at least the following elements:
   *   - id: A unique identifier of the email type. Examples: \'contact_user_copy\',
   *     \'user_password_reset\'.
   *   - to: The mail address or addresses where the message will be sent to.
   *     The formatting of this string will be validated with the
   *     @link http://php.net/manual/filter.filters.validate.php PHP email validation filter. @endlink
   *     Some examples:
   *     - user@example.com
   *     - user@example.com, anotheruser@example.com
   *     - User <user@example.com>
   *     - User <user@example.com>, Another User <anotheruser@example.com>
   *   - subject: Subject of the email to be sent. This must not contain any
   *     newline characters, or the mail may not be sent properly. The subject
   *     is converted to plain text by the mail plugin manager.
   *   - body: Message to be sent. Accepts both CRLF and LF line-endings.
   *     Email bodies must be wrapped. For smart plain text wrapping you can use
   *     \\Drupal\\Core\\Mail\\MailFormatHelper::wrapMail() .
   *   - headers: Associative array containing all additional mail headers not
   *     defined by one of the other parameters.  PHP\'s mail() looks for Cc and
   *     Bcc headers and sends the mail to addresses in these headers too.
   *
   * @return bool
   *   TRUE if the mail was successfully accepted for delivery, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Mail\\MailInterface',
         'functionName' => 'mail',
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
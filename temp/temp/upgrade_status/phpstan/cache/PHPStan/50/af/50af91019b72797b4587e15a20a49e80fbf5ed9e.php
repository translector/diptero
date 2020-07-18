<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Mail/Plugin/Mail/PhpMail.php-1594234425',
   'data' => 
  array (
    '8841f8068b4f8652ab72936acd6bcefb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the default Drupal mail backend, using PHP\'s native mail() function.
 *
 * @Mail(
 *   id = "php_mail",
 *   label = @Translation("Default PHP mailer"),
 *   description = @Translation("Sends the message as plain text, using PHP\'s native mail() function.")
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail\\Plugin\\Mail',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'mailinterface' => 'Drupal\\Core\\Mail\\MailInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04bc1bcf851d7523ce3e8176248d6490' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail\\Plugin\\Mail',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'mailinterface' => 'Drupal\\Core\\Mail\\MailInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d44fbaccc0df2884415a2a3fdf3419e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * PhpMail constructor.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail\\Plugin\\Mail',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'mailinterface' => 'Drupal\\Core\\Mail\\MailInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9839805c4ca80f645598fc5f2dc94173' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Concatenates and wraps the email body for plain-text mails.
   *
   * @param array $message
   *   A message array, as described in hook_mail_alter().
   *
   * @return array
   *   The formatted $message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail\\Plugin\\Mail',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'mailinterface' => 'Drupal\\Core\\Mail\\MailInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1536d6afaca2cc03eb09b319d2e08fd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sends an email message.
   *
   * @param array $message
   *   A message array, as described in hook_mail_alter().
   *
   * @return bool
   *   TRUE if the mail was successfully accepted, otherwise FALSE.
   *
   * @see http://php.net/manual/function.mail.php
   * @see \\Drupal\\Core\\Mail\\MailManagerInterface::mail()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail\\Plugin\\Mail',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'mailinterface' => 'Drupal\\Core\\Mail\\MailInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
         'functionName' => 'mail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69718b5f34243e7c29fe823f3af3ec03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Disallows potentially unsafe shell characters.
   *
   * Functionally similar to PHPMailer::isShellSafe() which resulted from
   * CVE-2016-10045. Note that escapeshellarg and escapeshellcmd are inadequate
   * for this purpose.
   *
   * @param string $string
   *   The string to be validated.
   *
   * @return bool
   *   True if the string is shell-safe.
   *
   * @see https://github.com/PHPMailer/PHPMailer/issues/924
   * @see https://github.com/PHPMailer/PHPMailer/blob/v5.2.21/class.phpmailer.php#L1430
   *
   * @todo Rename to ::isShellSafe() and/or discuss whether this is the correct
   *   location for this helper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail\\Plugin\\Mail',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'mailinterface' => 'Drupal\\Core\\Mail\\MailInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
         'functionName' => '_isShellSafe',
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
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/Mail/WebformPhpMail.php-1594690523',
   'data' => 
  array (
    '63a76e6a2e98b18e24b1d8b4df32a29a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Extend\'s the default Drupal mail backend to support HTML email.
 *
 * @Mail(
 *   id = "webform_php_mail",
 *   label = @Translation("Webform PHP mailer"),
 *   description = @Translation("Sends the message as plain text or HTML, using PHP\'s native mail() function.")
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Mail',
         'uses' => 
        array (
          'phpmail' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Mail\\WebformPhpMail',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1952468487dec9faf3ee674268eb6e70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Mail',
         'uses' => 
        array (
          'phpmail' => 'Drupal\\Core\\Mail\\Plugin\\Mail\\PhpMail',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Mail\\WebformPhpMail',
         'functionName' => 'format',
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
<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElementAttachmentInterface.php-1594690523',
   'data' => 
  array (
    '5ac13740cba4a72bc1fea46ec12eadc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for webform elements can provide email attachments.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86ad43f84b20553e0dbfd1d03356cb7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get email attachments.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return array
   *   An array containing email attachments which include an attachments
   *   \'filename\', \'filemime\', \'filepath\', and \'filecontent\'.
   *
   * @see \\Drupal\\mimemail\\Utility\\MimeMailFormatHelper::mimeMailHtmlBody
   * @see \\Drupal\\smtp\\Plugin\\Mail\\SMTPMailSystem::mail
   * @see \\Drupal\\swiftmailer\\Plugin\\Mail\\SwiftMailer::attachAsMimeMail
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
         'functionName' => 'getAttachments',
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
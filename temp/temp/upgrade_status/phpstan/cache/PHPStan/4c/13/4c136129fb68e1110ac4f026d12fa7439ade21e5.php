<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandlerMessageInterface.php-1594690523',
   'data' => 
  array (
    'b7b501876195fca20a8c8c4c186a294b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for webform handlers that send messages.
 *
 * @see \\Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb3e024be84045f67fe81b5b2e33e38c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a fully populated email for a webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return array
   *   An array containing message parameters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
         'functionName' => 'getMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b9b2a62f7d6cbeff7153b4a444a9a15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sends and logs a webform submission message.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $message
   *   An array of message parameters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
         'functionName' => 'sendMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68e1531272f82c1cfc1a8a7c6d5fe0f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Confirm that a message has a recipient.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $message
   *   An array of message parameters.
   *
   * @return bool
   *   TRUE if the message has a recipient.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
         'functionName' => 'hasRecipient',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7cd0ae9ef2ef2495698de09d377726e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build resend message webform.
   *
   * @param array $message
   *   An array of message parameters.
   *
   * @return array
   *   A webform to edit a message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
         'functionName' => 'resendMessageForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '215468e1e8c3b1ea59b3e84c6975c414' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build message summary.
   *
   * @param array $message
   *   An array of message parameters.
   *
   * @return array
   *   A renderable array representing a message summary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
         'functionName' => 'getMessageSummary',
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